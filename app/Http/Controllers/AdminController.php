<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function check(Request $request)
    {
    
         $email = $request->email;
         $password = $request->password;
    
         if (auth()->attempt(array('email' => $email , 'password' => $password ))){
            return redirect('/admin/steam');
            }
            else {        
                return "Wrong Credentials";
            }  
    }

    public function insert(Request $request) 
    {
        $sname = $request->input('sname');
        $designation = $request->input('designation');
        $branch = $request->input('branch');
        $course = $request->input('course');
        $year = $request->input('year');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        DB::insert('insert into steam (sname,designation,branch,course,year,email,mobile) values(?,?,?,?,?,?,?)',[$sname,$designation,$branch,$course,$year,$email,$mobile]);
        echo "Record inserted successfully.<br/>";
        return redirect('/admin/steam');
    }

    public function store(Request $request) 
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $media = $request->input('media');
        $image = $request->input('image');
        DB::insert('insert into news (title,description,media,image) values(?,?,?,?)',[$title,$description,$media,$image]);
        echo "Record inserted successfully.<br/>";
        return redirect('/admin/news');
    }

    public function save(Request $request) 
    {
        $cname = $request->input('cname');
        $syllabus = $request->input('syllabus');
        $media = $request->input('media');
        DB::insert('insert into exam (cname,syllabus,media) values(?,?,?)',[$cname,$syllabus,$media]);
        echo "Record inserted successfully.<br/>";
        return redirect('/admin/exam');
    }

    public function val(Request $request) 
    {
        $name = $request->input('name');
        $fname = $request->input('fname');
        $postal = $request->input('postal');
        $personal = $request->input('personal');
        $sex = $request->input('sex');
        $city = $request->input('city');
        $course = $request->input('course');
        $district = $request->input('district');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $password = Hash::make ($request->password);
        DB::insert('insert into registration (name,fname,postal,personal,sex,city,course,district,email,mobile,password) values(?,?,?,?,?,?,?,?,?,?,?)',[$name,$fname,$postal,$personal,$sex,$city,$course,$district,$email,$mobile,$password]);
        echo "Record inserted successfully.<br/>";
        return redirect('register');
    }

    // public function sign(Request $request) 
    // {
    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     DB::insert('insert into sign (email,password) values(?,?)',[$email,$password]);
    //     echo "Record inserted successfully.<br/>";
    //     return redirect('index');
    // }

    function sign(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function message(Request $request)
    {
        return view('contact');
                
    }

    function send(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

    $data=array(
        'name'=>$request->name,
        'subject'=>$request->subject,
        'message'=>$request->message
    );
    Mail::to('@er.sharma2k14@gmail.com')->send(new SendMail(data));
    return back()->with('success','Thanks for contacting us!');
    }
}

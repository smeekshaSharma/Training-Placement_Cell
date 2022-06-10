<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;                         
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $table = 'registration';
        $student = DB::table($table)->where('email', $request->email)->first();
        if(!$student || !Hash::check($request->password,$student->password))
        {
            //return abort(404);
            echo "Login details are not valid";
            // return redirect("signin")->withSuccess('Login details are not valid');
        }
        else{
            $request->session()->put('student',$student);
            echo "<script>
                Swal.fire('Any fool can use a computer')
            </script>";
            return redirect('/');
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'postal' => 'required',
            'personal' => 'required',
            'sex' => 'required',
            'city' => 'required',
            'course' => 'required',
            'district' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have Registered.');
    }

    public function mock_test(Request $request) 
    {
        $cname = $request->input('cname');
        $media = $request->input('media');
        DB::insert('insert into mock_test (cname,media) values(?,?)',[$cname,$media]);
        return redirect('/admin/test');
    }
    
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'fname' =>$data['fname'],
        'postal' =>$data['postal'],
        'personal'=>$data['personal'],
        'sex' =>$data['sex'],
        'city' =>$data['city'],
        'course'=>$data['course'],
        'district'=>$data['district'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
            return view('dashboardd');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('signin');
    }
}
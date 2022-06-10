<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\SendPushNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    function charm()
    {
        return view('ourcharms');
    }
    function cell()
    {
        return view('cell');
    }
    function contact()
    {
        return view('contact');
    }
    function signin()
    {
        return view('signin');
    }
    function register()
    {
        return view('register');
    }
    function faq()
    {
        return view('faq');
    }
    function officers()
    {
        return view('officers');
    }
    function steam()
    {
        return view('steam');
    }

    function test()
    {
        return view('test');
    } 

    function news()
    {
        return view('news');
    }
    function exam()
    {
        return view('exam');
    }
    function login()
    {
        return view('login');
    }

    function placementsyllabus(Request $req)
    {
        $exam= Exam::all()->toArray();
        return view('placementsyllabus',compact('exam'));
    }

    function team(Request $req)
    {
        $steam= Steam::all()->toArray();
        return view('team',compact('steam'));
    }

    function latestnews(Request $req)
    {
        $news= News::all()->toArray();
        return view('latestnews',compact('news'));
    }

    function mock_test(Request $req)
    {
        $mock_test= MockTest::all()->toArray();
        return view('mock_test',compact('mock_test'));
    }

    public function updateToken(Request $request){
        try{
            $request->user()->update(['fcm_token'=>$request->token]);
            return response()->json([
                'success'=>true
            ]);
        }catch(\Exception $e){
            report($e);
            return response()->json([
                'success'=>false
            ],500);
        }
    }

    public function notification(Request $request){
        $request->validate([
            'title'=>'required',
            'message'=>'required'
        ]);
    
        try{
            $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
    
            //Notification::send(null,new SendPushNotification($request->title,$request->message,$fcmTokens));
  
            /* or */
    
            //auth()->user()->notify(new SendPushNotification($title,$message,$fcmTokens));
    
            /* or */
    
            Larafirebase::withTitle($request->title)
                ->withBody($request->message)
                ->sendMessage($fcmTokens);
    
            return redirect()->back()->with('success','Notification Sent Successfully!!');
    
        }catch(\Exception $e){
            report($e);
            return redirect()->back()->with('error','Something goes wrong while sending notification.');
        }
    }


}

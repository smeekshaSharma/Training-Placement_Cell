<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Steam;
use App\Models\News;
use App\Models\MockTest;
use Goutte;
use Spatie\ArrayToXml\ArrayToXml;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function adminlogin()
    {
        return view('adminlogin');
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

    public function rough(Request $req)
    {
        // $res = array("HCL" =>"asdfasfasfadsfasf","Wipro" => "ftfjgklkjlokolj");
        $res= exam::all();
        
        return view('rough',compact('res'));
    } 
}

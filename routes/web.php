<?php

use App\Notifications\SendPushNotification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScrapperController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/",[IndexController::class,'index'])->name('index');

Route::get("index",[IndexController::class,'index'])->name('index');

Route::get("charms",[IndexController::class,'charm'])->name('charm');

Route::get("cell",[IndexController::class,'cell'])->name('cell');

Route::get("contact",[IndexController::class,'contact'])->name('contact');

Route::get("signin",[IndexController::class,'signin'])->name('signin');

Route::get("faq",[IndexController::class,'faq'])->name('faq');

Route::get("officers",[IndexController::class,'officers'])->name('officers');

Route::get("admin/steam",[IndexController::class,'steam'])->name('student_team');

Route::get("admin/news",[IndexController::class,'news'])->name('news');

Route::get("admin/exam",[IndexController::class,'exam'])->name('exam');

Route::get("adminlogin",[IndexController::class,'adminlogin'])->name('adminlogin');

Route::get("placementsyllabus",[IndexController::class,'placementsyllabus'])->name('syllabus');

Route::get("latestnews",[IndexController::class,'latestnews'])->name('latestnews');

Route::get("team",[IndexController::class,'team'])->name('team');

Route::post("adminlogin",[\App\Http\Controllers\AdminController::class,'check']);

Route::post("admin/steam",[\App\Http\Controllers\AdminController::class,'insert']);

Route::post("admin/news",[\App\Http\Controllers\AdminController::class,'store']);

Route::post("admin/exam",[\App\Http\Controllers\AdminController::class,'save']);

Route::get("*",function(){
   return abort(404);
});

//Route::get("latestnews",[IndexController::class,'testt'])->name('testt');

Route::get('latestnews',[ScrapperController::class,'crawled'])->name('scrapper');

//Route::post("contact",[\App\Http\Controllers\AdminController::class,'message']);

Route::get("admin/test",[IndexController::class,'test'])->name('test');

Route::get("rough",[IndexController::class,'rough'])->name('rough');

Route::get("placementsyllabus",[IndexController::class,'rough'])->name('placementsyllabus');

Route::get("mock_test",[IndexController::class,'mock_test'])->name('mock_test');

Route::get("contact",[AdminController::class,'message'])->name('message');

Route::post("contact/send",[AdminController::class,'send'])->name('send');

Route::post("admin/test",[\App\Http\Controllers\AuthController::class,'mock_test']);

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/', function () {
       return view('home');
    });

    Route::patch('/fcm-token', [HomeController::class, 'updateToken'])->name('fcmToken');
    Route::post('/send-notification',function (){
        Notification::send(null,new SendPushNotification($title,$message,$fcmTokens));
    });

//www.domain.com/fcm
 Route::get('/fcm',"Controller@index");
 });
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalenderControler;
use App\Http\Controllers\InputController;
use App\Http\Controllers\expDispController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\endUpdateController;
use App\Http\Controllers\AcountController;

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

//ログイン　ログアウト//
Route::get('/index',function(){
    return view('index');
});
Route::get('/insert',function(){
    return view('insert');
});
Route::get('endInsert',function(){
    return view('endInsert');
});
Route::post('/in',[InsertController::class,'insert']);
Route::post('/calendar',[IndexController::class,'index']);
Route::get('/logout', function () {
    unset($_SESSION['userInf']);
    return view('logout');
}); 
////////////
//login 伊良波課題処理
Route::post('/relogin',[LoginController::class, 'login'] ); //ログイン認証用
Route::get('/calendar',[CalenderControler::class, 'turn'] ); //再出力


//収支登録　miyagi
Route::get('/input',function(){
    return view('input');
});

Route::get('/input/{date}',[InputController::class, 'expense']);

Route::post('/insert',[InputController::class, 'insert']);



Route::get('/acount',function(){
    $user_id = session('userInf');
    return view('acount')->with('user',$user_id);
});

Route::post('/changePassword',function(){
    return view('changePassword');
});

Route::post('/changeUserName',function(){
    return view('changeUserName');
});

Route::post('/changeMail',function(){
    return view('changeMail');
});

Route::get('/admin',function(){
    return view('admin');
});
Route::get('/information',function(){
    return view('information');
});
Route::get('/userlist',function(){
    return view('userlist');
});


Route::get('/category',function(){
    return view('category');
});
Route::get('/cumulative',function(){
    return view('cumulative');
});

Route::get('/getinformation',function(){
    return view('getinformation');
});
//非同期通信
Route::get('/expnses/{date}', [expDispController::class,'disp']);
Route::get('/update/{id}',[updateController::class,'update']);
//

//更新
Route::post('/endUpdate',[endUpdateController::class,'update']);
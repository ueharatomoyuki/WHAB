<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalenderControler;
use App\Http\Controllers\InputController;

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

Route::get('/input/{html_title}{day}',[InputController::class, 'expense']);

Route::post('/insert',[InputController::class, 'insert']);

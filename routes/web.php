<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalenderControler;

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

//login 伊良波課題処理
Route::get('/index',[LoginController::class, 'index'] ); //初期表示用
Route::post('/relogin',[LoginController::class, 'login'] ); //ログイン認証用
Route::get('/calendar',[CalenderControler::class, 'turn'] ); //再出力

Route::post('/calendar',[IndexController::class,'index']);

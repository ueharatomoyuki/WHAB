<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{   //カレンダーから登録画面へ
    function input(){
        return view('input');
    }

    //登録画面から登録画面へ
    function tocalendar(){
        return view('/calendar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class InsertController extends Controller
{
    public function insert(Request $re){
        $name = $re->name;
        $pass = $re->pass;
        $pass1 = $re->pass1;
        $mail = $re->mail;
        $re->validate([
            'name' => 'required',
            'pass' => 'required',
            'pass1'=> 'required',
            'mail' => 'required'
        ]);
        
        if($pass !== $pass1){
            $_SESSION['noPass'] = 0;
            return redirect('insert');
        }
        $name2 = DB::select("select * from users where name = '$name'");
        if(count($name2)!==0){
            $_SESSION['uName'] = $name;
            return redirect('insert');
        }

         DB::table('users')->insert([
            ['name' => "$name",'password' => "$pass",'mail'=> "$mail","role" => 0]
        ]);
        return redirect('endInsert');
    }
}

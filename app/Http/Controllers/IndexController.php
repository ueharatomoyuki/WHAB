<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class IndexController extends Controller
{
    public function index(Request $request){
        $name = $request->name;
        $pass = $request->pass;
        // $userLog[] = null;
        $request->validate([
            'name' => 'required',
            'pass' => 'required'
        ]);
        if($name !== null && $pass !==null){
            $userLog = DB::select("select * from users where name = '$name' and password = '$pass'");
        }
        if(count($userLog) == 0){
            $_SESSION['userLog'] = count($userLog);
            return redirect('index');
        }else{
            // $_SESSION['userInf'] = $userLog;
            $request->session()->put('userInf',$userLog);
            $request->session()->put('test','test');
            return redirect('calendar');
        }
    }
}
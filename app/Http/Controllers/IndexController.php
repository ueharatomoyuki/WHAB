<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request){
        $login = $request->login_id;
        $pass = $request->pass;
        // $userLog[] = null;
        $request->validate([
            'login_id' => 'required',
            'pass' => 'required'
        ]);
        if($login !== null && $pass !==null){
            $userLog = DB::select("select * from users where login_id = '$login' || password = '$pass'");
        }
        if(count($userLog) == 0){
            $_SESSION['userLog'] = count($userLog);
            return redirect('index');
        }else{
            // $_SESSION['userInf'] = $userLog;
            $request->session()->put('userInf',$userLog);
            $request->session()->put('test','test');
            return view('calendar');
        }
    }
}

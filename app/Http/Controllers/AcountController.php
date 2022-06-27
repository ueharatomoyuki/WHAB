<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AcountController extends Controller
{
    public function name(Request $request)
    {
        $user = session('userInf');
        $id = $user[0]->id;
        $name = $request->user_name;
        log::debug('user', [$user]);
        DB::update("update users set name = '$name' where id = $id");
        $user[0]->name = $name;
        $request->session()->put('userInf', $user);
        return redirect('/acount');
    }

    public function pass(Request $request)
    {
        session_start();
        $user = session('userInf');
        $id = $user[0]->id;
        $key = $user[0]->password;
        $pass = $request->pass;
        $newpass1 = $request->newPass1;
        $newpass2 = $request->newPass2;
        // log::debug('key', [$key]);
        // log::debug('pass', [$pass]);
        // log::debug('1', [$newpass1]);
        // log::debug('2', [$newpass2]);
        if ($key == $pass && $newpass1 == $newpass2) {
            DB::update("update users set password = '$newpass1' where id = $id");
            $user[0]->password = $newpass1;
            $request->session()->put('userInf', $user);
            return redirect('/acount');
        } else {
            $_SESSION['passError'] = "現在のパスワードまたは、確認のパスワードが一致しません";
            return redirect('/changePassword');
        }
    }

    public function mail(Request $request)
    {
        $user = session('userInf');
        $id = $user[0]->id;
        $mail = $request->mail;
        DB::update("update users set mail = '$mail' where id = '$id'");
        $user[0]->mail = $mail;
        $request->session()->put('userInf', $user);
        return redirect('/acount');
    }
}

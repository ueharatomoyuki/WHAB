<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function list()
    {
        $list = DB::select("select * from users");
        return view('userlist')->with('list',$list);
    }

    public function sort(Request $request)
    {
        $sort = $request->sort;
        $list = DB::select("select * from users where name like '%$sort%'");
        return view('userlist')->with('list',$list);
    }
}

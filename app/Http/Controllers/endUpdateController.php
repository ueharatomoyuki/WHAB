<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class endUpdateController extends Controller
{
    public function update(Request $request){
        $cate = $request->cate;
        $detail = $request->detail;
        $money = $request->money;
        $exId = $request->id;
        $updb = DB::update("update expenses set detail = '$detail',money = $money,category_id = $cate where id = $exId ");

        return redirect('/calendar');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Log;

class CumulativeController extends Controller
{   
    function returndate(Request $request)
    {
        $cate = $request->cate;
        Log::debug('cate', [$cate]);
        $date = $request->date;
        Log::debug('date', [$date]);
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        Log::debug('id', [$id]);
        $default = DB::select("select * from default_categories ");//テーブルに入っているデータを取っている
        $startDate = '2012-01';
        $endDate = date("Y-m",strtotime("+1 year"));
        $result1 = DB::select("select sum(money) FROM expenses WHERE user_id = $id and date");
        $result2 = DB::select("select sum(date) FROM expenses WHERE user_id = $id and date");
        return view('cumulative')->with('default',$default)->with('startDate', $startDate)->with('endDate',$endDate)->with('result1' ,$result1)->with('result2' ,$result2);
    }
}

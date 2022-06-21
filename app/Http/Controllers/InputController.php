<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{   
    function expense($html_title,$day)
    {
        $default = DB::select("select * from default_categories ");
        return view('input')->with('html_title', $html_title)->with('day', $day)->with('default',$default);
    }

    public function insert(Request $request)
    {   
        $ym =  $request->html_title;
        $d = $request->day;  //date日付
        $category_id = $request->expense;    //カテゴリーid
        $expenseDetail = $request->expenseDetail;  //detail詳細
        $expenseMoney = $request->expenseMoney;   //money金額
        $user_id = session('userInf');   //user_id
        // $request->validate([
        //     'name' => 'required',
        //     'pass' => 'required',
        //     'pass1'=> 'required',
        //     'mail' => 'required'
        // ]);

        Log::debug('category_id', [$category_id]);

        $newdata = DB::table('expenses')->insert([
            ['date' => "$ym"."-"."$d",
             'category_id' => "$category_id",
             'detail' => "$expenseDetail",
             'money'=> $expenseMoney,
             'user_id'=> $user_id[0]->id
             ]
        ]);
         return redirect('calendar');
    }
}
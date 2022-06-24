<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{   
    
    //支出表示
    function expense($date)
    {
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        $default = DB::select("select * from default_categories ");
        $exp = DB::select("select c.category_name, e.detail, e.money from expenses e inner join default_categories c on e.category_id = c.id where e.user_id = $id and date = '$date'");
        return view('input')->with('date', $date)->with('default',$default)->with('exp',$exp);
    }

    //支出登録
    public function insert(Request $request)
    {   
        // $ym =  $request->html_title;
        // $d = $request->day;  //date日付
        $date = $request->date;  //date日付
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
        // $request->validate([
        //     'money' => 'required'
        // ]);

        //Log::debug('category_id', [$category_id]);

        $newdata = DB::table('expenses')->insert([
            [
                // 'date' => "$ym"."-"."$d",
                'date' => $date,
             'category_id' => "$category_id",
             'detail' => "$expenseDetail",
             'money'=> $expenseMoney,
             'user_id'=> $user_id[0]->id
             ]
        ]);
         return redirect('calendar');
    }

    //収入登録
    public function incomeInsert(Request $request)
    {   
        // $ym =  $request->html_title;
        // $d = $request->day;  //date日付
        $date = $request->date;  //date日付
        $incomeDetail = $request->incomeDetail;  //detail詳細
        $incomeMoney = $request->incomeMoney;   //money金額
        $user_id = session('userInf');   //user_id  
        // $request->validate([
        //     'name' => 'required',
        //     'pass' => 'required',
        //     'pass1'=> 'required',
        //     'mail' => 'required'
        // ]);

        //Log::debug('category_id', [$category_id]);

        $newdata = DB::table('incomes')->insert([
            [
                // 'date' => "$ym"."-"."$d",
             'date' => $date,
             'source' => "$incomeDetail",
             'money'=> $incomeMoney,
             'user_id'=> $user_id[0]->id
             ]
        ]);
         return redirect('calendar');
    }
}
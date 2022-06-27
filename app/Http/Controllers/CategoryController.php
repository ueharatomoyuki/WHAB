<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    function useridCheck ()
    {
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        $cateUser = DB::select("select user_id from categories where user_id = $id ");
            Log::debug('cateUser', [$cateUser]);

        if($cateUser == 0 || is_null($cateUser) || empty($cateUser)){
            //支出分類のデフォルトデータ・レコード数の取得 
            $default = DB::select("select * from default_categories ");
                Log::debug('default', [$default]);
            $count = DB::select("select count(id) from default_categories ");
            return view('/category')->with('default', $default)
                                    ->with('count', $count);   
        }else{
            //user_id用の支出費目・レコード数の取得
            $default = DB::select("select * from categories where user_id = $id ");
                Log::debug('default', [$default]);
            $count = DB::select("select count(user_id) from categories where user_id = $id ");
            return view('/category')->with('default', $default)
                                    ->with('count', $count);   
        }
    }

    //user-idとともに支出分類データを登録
    function cateinsert(Request $request)
    {
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        $cnt = $request->count;
            // Log::debug('cnt', [$cnt]);

            $cateid = $request->id;
                Log::debug('id', [$cateid]);
            $category_name = $request->category_name;
                Log::debug('category_name', [$category_name]);
            $category_select = $request->category_select;
                Log::debug('category_select', [$category_select]);
                        
            //既存レコードのupdate    
            // for($i= ; $i <= $cnt; $i++) {
            //         DB::table('categories')->where('id', $user->id)
            //                           ->update([['category_name' => "$category_name[$i]",'category_select' => "$category_select[$i]",'user_id'=> "$id"]
            //                             ]);
            //  }

            //ユーザーによるカテゴリーの追加insert
             for($i=1; $i<$cnt; $i++){
                DB::table('categories')->upsert([
                    ['category_name' => $category_name[$i], 'category_select' => $category_select[$i], 'user_id' => $id],
                    ], ['category_name', 'user_id'], ['category_select']);
                // $newCategory = DB::table('categories')->insert([
                //     ['category_name' => "$category_name[$i]",'category_select' => "$category_select[$i]",'user_id'=> "$id"]
                //     ]);
            }
            

        return redirect('category');
    }

    // //user-idとともに支出分類データを登録
    // function catedelete(Request $request)
    // {
    //     $user_id = session('userInf');
    //     $id = $user_id[0]->id; 
    //     $cnt = $request->count;
    //         // Log::debug('cnt', [$cnt]);

    //         $id = $request->id;
    //             Log::debug('id', [$id]);
    //         // $category_name = $request->category_name;
    //         //     Log::debug('category_name', [$category_name]);
    //         // $category_select = $request->category_select;
    //         //     Log::debug('category_select', [$category_select]);
            
    //         // foreach($category_name as $cate_name){
    //         //     // Log::debug('cate_name', [$cate_name]);
    //         // }
    //         // foreach($category_select as $cate_select){
    //         //     // Log::debug('cate_select', [$cate_select]);
    //         // }
    //         //     // Log::debug('category_name', [$category_name[1]]);

    //         for($i=1; $i<=$cnt; $i++){
    //             // $deletedCate = DB::table('categories')->delete([
    //             //     ['id' => "$id[$i]",'category_name' => "$category_name[$i]",'category_select' => "$category_select[$i]",'user_id'=> "$id"]
    //             //     ]);
    //         }
    //     return redirect('category');
    // }
}
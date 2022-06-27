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
            $count = DB::select("select count(id) cou from default_categories ");
            Log::debug('count', [$count]);
            return view('/category')->with('default', $default)
                                    ->with('count', $count);   
        }else{
            //user_id用の支出費目・レコード数の取得
            $default = DB::select("select * from categories where user_id = $id ");
            $count = DB::select("select count(user_id) cou from categories where user_id = $id ");
            $count[0]->cou--;
            return view('/category')->with('default', $default)
                                    ->with('count', $count);   
        }
    }

    //user-idとともに支出分類データを登録
    function cateinsert(Request $request)
    {
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
            // Log::debug('cnt', [$cnt]);

            $cateid = $request->id;
                // Log::debug('id', [$cateid]);
            $category_name = $request->category_name;
            $cnt = count($category_name);
                // Log::debug('name', [$category_name]);
                // Log::debug('c', [$cnt]);
            $category_select = $request->category_select;
                Log::debug('category_select', [$category_select]);
            $delete = $request->delete;
                        

             for($i=0; $i<$cnt; $i++){
                    $in = DB::select("select * from categories where category_name = '$category_name[$i]'and user_id = '$id'");
                    if(count($in)==0){
                        $n = $i + 1 ;
                        DB::table('categories')->insert([
                            ['category_name' => "$category_name[$i]",'category_select' => "$category_select[$i]",'user_id' => $id]
                        ]);
                    }else{
                         if($in[0]->category_select != $category_select[$i] ){
                             Log::debug('select',[$in[0]->id ]);
                             $cid = $in[0]->id ;
                             DB::update("update categories set category_select = $category_select[$i] where id = $cid ");
                         }
                    }

                if(isset($delete[$i])){
                Log::debug('delete',[$delete[$i]]);
                //削除された分類が書かれている支出はどうするかも本来は考えないといけない
                DB::table('categories')->where('category_name','=',"$category_name[$i]")->where('user_id','=',$id)->delete();
                }
            }
            $category_name = "";
        return redirect('category');
    }


}
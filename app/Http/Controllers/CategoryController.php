<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function categories()
    {
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        $default = DB::select("select * from default_categories ");
        // $exp = DB::select("select c.category_name, e.detail, e.money from expenses e inner join default_categories c on e.category_id = c.id where e.user_id = $id and date = '$date'");
        return view('/category')->with('default', $default);
                            //->with('default',$default);
                            //->with('exp',$exp);
    }
}

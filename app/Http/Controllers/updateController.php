<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class updateController extends Controller
{
    public function update($id)
    {
        $user_id = session('userInf');
        $i = $user_id[0]->id; 
        $up = DB::select("select e.id,c.id category_id, c.category_name, e.detail, e.money from expenses e inner join categories c on e.category_id = c.id where e.id = $id ");
        Log::debug('id',[$i]); 
        $default = DB::select("select * from categories where user_id = $i  ");
        return ['result' => true, 'up' => $up, 'def' => $default];
    }
}

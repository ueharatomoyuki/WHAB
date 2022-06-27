<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    public function update($id)
    {
        $up = DB::select("select e.id,c.id category_id, c.category_name, e.detail, e.money from expenses e inner join default_categories c on e.category_id = c.id where e.id = $id "); 
        $default = DB::select("select * from default_categories ");
        return ['result' => true, 'up' => $up, 'def' => $default];
    }
}

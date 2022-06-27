<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class expDispController extends Controller
{
    public function disp($date)
    {
        //$date = $request->date;
        $user_id = session('userInf');
        $id = $user_id[0]->id; 
        $exp = DB::select("select c.category_name, e.detail, e.money,e.id from expenses e inner join default_categories c on e.category_id = c.id where e.user_id = $id and date = '$date'");
        Log::debug('exp',[$exp]);
        return ['result' => true, 'expenses' => $exp];
    }
}

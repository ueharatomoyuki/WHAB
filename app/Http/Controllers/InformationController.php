<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use DateTime;

class InformationController extends Controller
{
    public function information(Request $request){

        $messege = $request->informessege;
            Log::debug('messege', [$messege]);
        $date = new datetime();
            Log::debug('date', [$date]);
        $today = $date->format('Y-m-d');
            Log::debug('today', [$today]);
        $newMessege = DB::table('information')->insert(['messege'=>"$messege", 'date'=>"$today"]);
        return view('information');
    }

    public function getinformation(){

        $getMessege =  DB::select("select date,messege from information order by date desc ");
        return view('getinformation')->with('getMessege', $getMessege);
    }
}

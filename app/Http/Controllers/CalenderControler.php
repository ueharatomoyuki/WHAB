<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderControler extends Controller
{
    public function turn() 
    {
        return view('calendar');
    }

    // public function return() 
    // {
    //         return view('calendar'); 

    //  }
}


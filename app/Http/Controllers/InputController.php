<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{   
    function expense($html_title,$day)
    {

        return view('input')->with('html_title', $html_title)->with('day', $day);
    }

    
    // function income()
    // {
        
    //     return view('calendar');
    // }
}

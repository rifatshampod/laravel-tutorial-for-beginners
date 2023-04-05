<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //$feature = ['marketing', 'digital', 'branding'];
    
    function homeFunction(){
        $feature = array('marketing', 'digital', 'branding');  

        $hero = "This is updated hero 2 new one"; //dynamic
        
        return view('home')->with('hero', $hero);
    }
}
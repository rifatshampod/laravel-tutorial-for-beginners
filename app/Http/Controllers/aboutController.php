<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //about page function
    public function about(){

        $title = "We are Shampod and Rahat";
        
        return view('about')->with('title', $title);
    }

    //contact page
    public function contact(){

        return view('contact');
    }
}
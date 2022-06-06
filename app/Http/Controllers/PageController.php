<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //funzioni per pagine statiche
    public function home(){
        return view('home');
    }
}

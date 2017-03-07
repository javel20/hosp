<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

class MainController extends Controller
{
    public function home(){
        
        return view('main.home');

    }
}

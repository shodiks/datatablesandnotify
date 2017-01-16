<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //controller
    public function about() {
    	return view ('about');
    }
}

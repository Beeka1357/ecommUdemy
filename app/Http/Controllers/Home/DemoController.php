<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function HomeMain(){
        return view('frontend.index');
    }
    // end method 

}

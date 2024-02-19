<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Homepage(){
        return view("pages.hero");
    }
}

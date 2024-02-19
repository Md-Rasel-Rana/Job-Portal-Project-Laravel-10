<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Homepage(){
        return view("pages.hero");
    }
    public function FindJob(){
        return view("pages.Find-jobs");
    }
    public function LogInpage(){
        return view("pages.login");
    }
    public function register(){
        return view("pages.register");
    }
    
    public function jobjost(){
        return view("pages.job-post");
    }
    public function accountpage(){
        return view("pages.account");
    }
    public function myjobpage(){
        return view("pages.my-job");
    }
    public function appliedjob(){
        return view("pages.job-applied");
    }
    public function savejobpage(){
        return view("pages.job-applied");
    }




}

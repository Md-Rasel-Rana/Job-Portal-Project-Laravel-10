<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;




Route::get('/',[DemoController::class,'Homepage']);
Route::get('/find-job',[DemoController::class,'FindJob']);
Route::get('/login',[DemoController::class,'LogInpage']);
Route::get('/userRegistration',[DemoController::class,'register']);
Route::get('/job-post',[DemoController::class,'jobjost']);
Route::get('/account',[DemoController::class,'accountpage']);
Route::get('/my-job',[DemoController::class,'myjobpage']);
Route::get('/applied-job',[DemoController::class,'appliedjob']);
Route::get('/save-job',[DemoController::class,'savejobpage']);
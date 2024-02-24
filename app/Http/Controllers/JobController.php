<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function userjobcreate(Request $request){
          
        $user_id = $request->header('id');
       // dd($user_id);      
         Job::create([
            'title'=>$request->input('title'),
            'user_id'=> $user_id,
            'category_id'=>$request->input('category_id'),
            'jobtype_id'=>$request->input('jobtype_id'),
            'vacancy'=>$request->input('vacancy'),
            'salary'=>$request->input('salary'),
            'location'=>$request->input('location'),
            'description'=>$request->input('description'),
            'benefits'=>$request->input('benefits'),
            'experience'=>$request->input('experience'),
            'responsibility'=>$request->input('responsibility'),
            'qualifications'=>$request->input('qualifications'),
            'keywords'=>$request->input('keywords'),
            'company_name'=>$request->input('company_name'),
            'company_location'=>$request->input('company_location'),
            'website'=>$request->input('website'),
         ]);
         return response()->json([
            'status'=>'success',
            'message'=>'Job Created successfully'
         ],201);
    }

  public function editjobpage($id){
   $data= Job::findorFail($id);
    return view('pages.jobEdit',compact('data'));
  }

  public function jobupdate(Request $request){
    $jobID = $request->input('jobID');
    $user_id = $request->header('id');
    // dd($user_id);      
      Job::where('id',"=",$jobID)->update([
         'title'=>$request->input('title'),
         'user_id'=> $user_id,
         'category_id'=>$request->input('category_id'),
         'jobtype_id'=>$request->input('jobtype_id'),
         'vacancy'=>$request->input('vacancy'),
         'salary'=>$request->input('salary'),
         'location'=>$request->input('location'),
         'description'=>$request->input('description'),
         'benefits'=>$request->input('benefits'),
         'experience'=>$request->input('experience'),
         'responsibility'=>$request->input('responsibility'),
         'qualifications'=>$request->input('qualifications'),
         'keywords'=>$request->input('keywords'),
         'company_name'=>$request->input('company_name'),
         'company_location'=>$request->input('company_location'),
         'website'=>$request->input('website'),
      ]);
      return response()->json([
         'status'=>'success',
         'message'=>'Job Update successfully'
      ],201);

  }




}

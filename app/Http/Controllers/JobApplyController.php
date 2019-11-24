<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Job;
use App\Applicant_Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:applicant');
    }
    public function create(Request $request){

        $hasprofile = Applicant::find(Auth::id())->profile()->first();
        /*dd($hasprofile);*/
        if(isset($hasprofile)){
            Applicant_Job::create([
                'applicant_id'=>Auth::id(),
                'job_id'=>$request->job_id
            ]);
            session()->flash('success','post updated successfully');

            return redirect(route('applied_jobs'));
        }
        else {

            session()->flash('warning','Please Create a profile first');
            return redirect(route('profile.create'));

        }



    }

    public function applied_jobs(){
        $jobs= Applicant::find(Auth::id())->jobs()->get();
        /*dd($jobs);*/
        return view('Applicant.show_applied_jobs',compact('jobs'));
    }
    public function show_all_jobs(){

        /*dd($id);*/
        $jobs = Job::all();

        /*dd($applicant);*/

        return view('Applicant.show_job',compact('jobs'));
    }
}

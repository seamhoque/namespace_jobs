<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::where('user_id',Auth::id())->get();

        /*dd($jobs);*/

        return view('company.show_job',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.post_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request);*/

        Job::create([
            'user_id'=> Auth::id(),
            'job_title'=>$request->job_title,
            'job_description'=>$request->job_description,
            'salary'=>$request->salary,
            'location'=>$request->location,
            'country'=>$request->country
        ]);

        session()->flash('success','category updated successfully');

        return redirect(route('job.create'));

        /*dd(Auth::id());*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }

    public function show_all_jobs($id){

        /*dd($id);*/
        $jobs = Job::all();
        $applicant = Applicant::find($id)->jobs()->get();
        /*dd($applicant);*/

        return view('Applicant.show_job',compact('jobs','applicant'));
    }

    public function show_applicants(Request $request){
        /*dd($request);*/

        $applicants = Job::find($request->job_id)->applicants()->get();
        /*dd($applicants);*/
        return view('company.show_applicants',compact('applicants'));
    }

    public function applicant_details(Request $request){
        /*dd($request->applicant_id);*/
        $profile = Applicant::find($request->applicant_id)->profile()->first();
        /*dd($profile);*/
        return view('company.applicant_profile',compact('profile'));
    }
}

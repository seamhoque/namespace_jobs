<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:applicant');
    }
    public function index()
    {
        /*dd("inside");*/
        /*return view('Applicant.profile.index');*/
        /*dd(Auth::id());*/
        $profile = Profile::find(Auth::id());

        /*if(isset($profile)){
            $profile=Profile::findOrFail(Auth::id());
        }

        else
            $profile = null;*/
        return view('Applicant.profile.index',compact('profile'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Applicant.profile.create');
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
        $profile_picture = $request->profile_picture->store("profile_picture");
        $resume = $request->resume->store("resume");
        $profile = [
            "applicant_id"=>Auth::id(),
            "skills" => $request->skills,
            "profile_picture" => $profile_picture,
            "resume" => $resume,
        ];

        /*dd($profile);*/

        Profile::create($profile);

        return redirect(route('profile.index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        /*dd($profile);*/
        return view('Applicant.profile.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        /*dd($request);*/
        /*$data = $request->only(['title','description','post_content','published_at']);*/
        $profile_picture = $request->profile_picture->store("profile_picture");
        $resume = $request->resume->store("resume");
        $data =[
          'skills'=>$request->skills,
          'profile_picture'=> $profile_picture,
            'resume'=>$resume
        ];
        /*dd($profile)*/;

        $profile->update($data);

        return redirect(route('profile.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    public function create_reg(Request $request){
        dd("asd");
    }
}

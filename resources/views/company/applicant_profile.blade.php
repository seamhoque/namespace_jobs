{{--{{dd($profile)}}--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Applicant Resume</div>

                    <div class="card-body">

                            <p>Skills: <b>{{$profile->skills}}</b></p>
                            <p>Image: <img src="{{asset('storage/'.$profile->profile_picture)}}" width="120px" height="120"></p>
                        <a href="{{asset('storage/'.$profile->resume)}}" class="btn btn-info">Download resume</a>
                        <a href="{{route('applicant.home')}}" class="btn btn-info">Go Back </a>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

{{--{{dd($profile)}}--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Applicant Resume</div>

                    <div class="card-body">
                        @if(isset($profile))
                            <p>Skills: <b>{{$profile->skills}}</b></p>
                            <p>Image: <img src="{{asset('storage/'.$profile->profile_picture)}}" width="120px" height="120"></p>
                            <p>CV Status: Updated</p>

                            <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-info">Click Here to Update Profile </a>
                            @else
                            <a href="{{route('profile.create')}}" class="btn btn-info">Create a profile first </a>
                            @endif


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

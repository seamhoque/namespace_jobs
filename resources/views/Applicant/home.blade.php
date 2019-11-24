@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Applicant Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{--{{dd(\Illuminate\Support\Facades\Auth::id())}}--}}

                        <a href="{{route('profile.index')}}" class="btn btn-info" style="margin-right: 50px">Profile</a>
                        <a href="{{route('applicant.show_jobs')}}" class="btn btn-info">Show All jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

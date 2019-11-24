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
                        {{--{{dd()}}--}}

                        <a href="{{route('profile.index')}}" class="btn btn-info" style="margin-right: 50px">Profile</a>
                        <a href="{{route('applicant.show_jobs')}}" class="btn btn-info" style="margin-right: 50px">Show All jobs</a>
                            <a href="{{route('applied_jobs')}}" class="btn btn-info">Show Applied jobs</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

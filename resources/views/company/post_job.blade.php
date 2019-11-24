@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post a job</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{route('job.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="job_title">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" id="job_title">
                                </div>

                                <div class="form-group">
                                    <label for="job_description">Job Description</label>
                                    <input type="text" class="form-control" name="job_description" id="job_description">
                                </div>

                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="text" class="form-control" name="salary" id="salary">
                                </div>

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" id="location">
                                </div>

                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country" id="country">
                                </div>

                                <button type="submit" class="btn btn-info "> POST </button>
                                <a href="{{route('home')}}" class="btn btn-info">Go Back </a>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

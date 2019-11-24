@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Showing all jobs available</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th>Job Title</th>
                            <th>Job Description</th>
                            <th>Salary </th>
                            <th>Location</th>
                            <th>Country</th>
                            <th>Status</th>
                            </thead>
                            <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->job_title}}</td>
                                    <td>{{$job->job_description}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->location}}</td>
                                    <td>{{$job->country}}</td>
                                    <td><b>Applied</b> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <a href="{{route('applicant.home')}}" class="btn btn-info">Go Back </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

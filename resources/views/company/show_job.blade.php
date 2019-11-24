@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post a job</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th>Job Title</th>
                            <th>Job Description</th>
                            <th>Salary </th>
                            <th>Location</th>
                            <th>Country</th>
                            </thead>
                            <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->job_title}}</td>
                                    <td>{{$job->job_description}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->location}}</td>
                                    <td>{{$job->country}}</td>

                                    {{--<td>
                                        <a href="{{}}" class="btn btn-info ">Edit</a>
                                    </td>--}}
                                   {{-- <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">
                                                Trash
                                            </button>
                                        </form>
                                    </td>--}}
                                    <td>
                                        <form action="{{route('show_applicants')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="job_id" value="{{$job->id}}">
                                            <button class="btn btn-info" type="submit">
                                                See applicants
                                            </button>
                                        </form>
                                    </td>
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

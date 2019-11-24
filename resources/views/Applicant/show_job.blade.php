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
                            </thead>
                            <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->job_title}}</td>
                                    <td>{{$job->job_description}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->location}}</td>
                                    <td>{{$job->country}}</td>

                                    <td>
                                        <a href="{{}}" class="btn btn-info ">Apply</a>
                                    </td>
                                    {{--<td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">
                                                Trash
                                            </button>
                                        </form>
                                    </td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

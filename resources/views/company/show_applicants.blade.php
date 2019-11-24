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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email </th>

                            </thead>
                            <tbody>

                            @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{$applicant->first_name}}</td>
                                    <td>{{$applicant->last_name}}</td>
                                    <td>{{$applicant->email}}</td>


                                    <td>
                                        <form action="{{route('applicant_details')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="applicant_id" value="{{$applicant->id}}">
                                            <button class="btn btn-info" type="submit">
                                                See Profile
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

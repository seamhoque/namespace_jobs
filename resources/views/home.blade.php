@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="{{route('job.create')}}" class="btn btn-info" style="margin-right: 50px">Post a Job</a>
                        <a href="{{route('job.index')}}" class="btn btn-info">See previous posted jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

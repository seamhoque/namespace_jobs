@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Applicant Dashboard</div>

                   <div class="card-body">
                       <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group m-b-2">
                               <label for="skills">Skills</label>
                               <input type="text" class="form-control" name="skills" id="skills">
                           </div>

                           <div class="form-group">
                               <label for="profile_picture">Upload Profile Picture</label>
                               <input type="file" class="form-control" name="profile_picture" id="profile_picture">
                           </div>

                           <div class="form-group">
                               <label for="resume">Upload Resume</label>
                               <input type="file" class="form-control" name="resume" id="resume">
                           </div>



                           <button type="submit" class="btn btn-info "> POST </button>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection

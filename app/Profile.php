<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['applicant_id','skills','profile_picture','resume'];
}

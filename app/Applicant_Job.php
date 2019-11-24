<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant_Job extends Model
{
    public $table = "applicant_job";
    protected $fillable = ['applicant_id','job_id'];
}

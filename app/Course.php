<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table="course";
    protected $primarykey="course_id";
    protected $fillable=['course_title', 'course_code', 'course_credite'];


}

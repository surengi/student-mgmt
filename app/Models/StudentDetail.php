<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;
    protected $table = "studentDetails";
    // private $table = "student_details";

    // todo fill all the fillable columns
    protected $fillable = [ 'usn','name','dob'];
}

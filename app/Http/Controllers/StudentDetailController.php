<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use Illuminate\Http\Request;

class StudentDetailController extends Controller
{
    public function index()
    {
        $students = StudentDetail::paginate(15);
        return view ("studentDetail.index", compact ("students"));
    }

    public function create(){
        return view ("studentDetail.create");
    }
}

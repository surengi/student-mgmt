<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDetailController extends Controller
{
    public function index()
    {
        return view ("studentDetail.index");
    }

    public function create(){
        return view ("studentDetail.create");
    }
}

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

    public function store(Request $request){
        dd($request->all());
        // StudentDetail::create($request->all()) 

        // StudentDetail::create([
        //     'usn'=> $request->student_id,
        //     'name'=> $request->name,
        //     'dob' => $request->dob,
        // ]);

        StudentDetail::create(array_merge($request->all(), ['user_id'=> 1]));
    }
}

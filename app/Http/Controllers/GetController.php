<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class GetController extends Controller
{
    public function index(){
    return view("gets.index");
}
}

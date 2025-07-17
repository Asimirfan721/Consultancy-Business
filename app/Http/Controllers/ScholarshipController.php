<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
   public function index(){
    return view('Scholarship.index');
   }
   public function anso()
{
    return view('Scholarship.anso'); // this will contain detailed ANSO info
}
public function csc(){
    return view('Scholarship.csc');
}
}

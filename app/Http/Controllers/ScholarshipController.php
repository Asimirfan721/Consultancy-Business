<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
   public function index(){
    return view('Schoalrship.index');
   }
   public function anso()
{
    return view('Scholarship.anso'); // this will contain detailed ANSO info
}
}

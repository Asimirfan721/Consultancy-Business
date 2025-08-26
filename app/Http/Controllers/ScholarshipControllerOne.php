<?php

namespace App\Http\Controllers;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

 

class ScholarshipControllerOne extends Controller
{
   public function create()
{
    return view('scholarships.upload');
}

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'description' => 'required|string|max:255',
        'deadline' => 'required|date|after_or_equal:today',
    ]);

    $path = $request->file('image')->store('scholarships', 'public');

    Scholarship::create([
        'image_path' => $path,
        'description' => $request->description,
        'deadline' => $request->deadline,
    ]);

    return redirect()->back()->with('success', 'Scholarship uploaded successfully!');
}
}

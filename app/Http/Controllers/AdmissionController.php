<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use Carbon\Carbon;

class AdmissionController extends Controller
{
    // Show all admissions (only active ones)
    public function index()
    {
        $admissions = Admission::active()->get();
        return view('admissions.index', compact('admissions'));
    }

    // Show upload form
    public function create()
    {
        return view('admissions.create');
    }

    // Store new admission
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'deadline' => 'required|date'
        ]);

        // Move image to public/images
        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/admissions'), $fileName);

        // Save relative path in DB
        $path = 'images/admissions/' . $fileName;

        Admission::create([
            'image' => $path,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('admissions.index')->with('success', 'Admission uploaded!');
    }

    // Download image
    public function download($id)
    {
        $admission = Admission::findOrFail($id);
        $filePath = public_path($admission->image);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return back()->with('error', 'File not found!');
    }
}

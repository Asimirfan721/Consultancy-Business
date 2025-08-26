<?php

namespace App\Http\Controllers;
use App\Models\Scholarship;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
  public function index()
    {
        // Fetch all images from public/images folder
        $imageFiles = File::files(public_path('images'));

        // Map file names into array with path + description
        $images = collect($imageFiles)->map(function ($file) {
            return [
                'file_path' => 'images/' . $file->getFilename(),
                'description' => pathinfo($file->getFilename(), PATHINFO_FILENAME), // use file name as description
            ];
        });

        return view('Scholarship.index', compact('images'));
    }
   public function anso()
{
    return view('Scholarship.anso'); // this will contain detailed ANSO info
}
public function csc(){
    return view('Scholarship.csc');
}
public function indexx()
{
    $images = Scholarship::latest()->get();
    return view('scholarship.index', compact('images')); // Or wherever you're rendering
}

public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:2048',
        'description' => 'nullable|string|max:255',
    ]);

    $path = $request->file('image')->store('scholarship_gallery', 'public');

    Scholarship::create([
        'file_path' => basename($path),
        'description' => $request->description,
    ]);

    return back()->with('success', 'Image uploaded successfully!');
}

public function destroy(Scholarship $image)
{
    Storage::disk('public')->delete('scholarship_gallery/' . $image->file_path);
    $image->delete();

    return back()->with('success', 'Image deleted successfully.');
}
}

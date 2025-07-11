<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function show($slug)
    {
        if ($slug === 'study-scholarships-in-denmark') {
            return view('blogs.study-in-denmark');
        }

        abort(404); // page not found for unknown slug
    }
    public function studyInItaly()
{
    return view('blogs.italy');
}

}

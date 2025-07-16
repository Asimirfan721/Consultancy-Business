<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function studyInItaly() // this method handles the route for Italy blog and showing an error related to page 404 not found
{
    return view('blogs.italy');
}
    public function studyInGermany() // this method handles the route for Germany blog and showing an error related to page 404 not found
{
    return view('blogs.germany');
}



}

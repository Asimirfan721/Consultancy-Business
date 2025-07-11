<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services(){
        return view('services');
    }
    public function documents(){
        return view('documents');
    }
     public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'destination' => 'required',
            'qualification' => 'required',
            'degree_level' => 'required',
            'university' => 'required',
            'programs' => 'required',
        ]);

        Mail::raw(
            "Name: {$data['name']}\nCity: {$data['city']}\nPhone: {$data['phone']}\nEmail: {$data['email']}\nDestination: {$data['destination']}\nQualification: {$data['qualification']}\nDegree Level: {$data['degree_level']}\nUniversity: {$data['university']}\nPrograms: {$data['programs']}",
            function ($message) {
                $message->to('rajputasim735@gmail.com')
                        ->subject('New Contact Form Submission from Consultancy Website');
            }
        );

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    //Footer 
    public function about()
{
    return view('about');
}
public function blogs()
{
    return view('blogs');
}


}
  
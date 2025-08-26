<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ScholarshipControllerOne;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdmissionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/scholarships', [ScholarshipController::class, 'index'])->name('scholarships');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/documents', [PageController::class, 'documents'])->name('documents');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact', [PageController::class, 'show'])->name('contact');
Route::post('/contact-submit', [PageController::class, 'submit'])->name('contact.submit');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');

// Admin Routes for adding Scholarships
Route::get('/admin/scholarships/create', [ScholarshipController::class, 'create'])->name('scholarships.create');
Route::post('/admin/scholarships/store', [ScholarshipController::class, 'store'])->name('scholarships.store');


//Footer
Route::get('/about', [PageController::class, 'about'])->name('about');
// Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
//Schoalrship 
Route::get('/scholarship1s', [ScholarshipController::class, 'index'])->name('Scholarship.index');
Route::get('/scholarships/anso', [ScholarshipController::class, 'anso'])->name('Scholarship.anso');
Route::get('/scholarships/csc', [ScholarshipController::class, 'csc'])->name('Scholarship.csc');

//Blog Routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/study-in-italy', [BlogController::class, 'studyInItaly'])->name('blog.study-in-italy');
Route::get('/blogs/study-in-germany', [BlogController::class, 'studyInGermany'])->name('blog.study-in-germany');
Route::get('/blogs/study-in-china', [BlogController::class, 'studyInChina'])->name('blog.study-in-china');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.details');



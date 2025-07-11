<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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



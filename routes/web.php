<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('Contact.contact');
Route::post('/store-contact', [App\Http\Controllers\ContactController::class, 'store'])->name('Contact.store');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('About.about');
Route::get('/children/create', [App\Http\Controllers\ChildrenController::class, 'create'])->name('Children.create');
Route::post('/children', [App\Http\Controllers\ChildrenController::class, 'store'])->name('Children.store');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('Profile.edit');
Route::get('/booking/create', [App\Http\Controllers\BookingController::class, 'create'])->name('Booking.create');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'store'])->name('Booking.store');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('Profile.update');

Route::get('/client-booking/{user}', [App\Http\Controllers\BookingController::class, 'client'])->name('Profile.client');

Route::post('/new-client-booking', [App\Http\Controllers\BookingController::class, 'clientstore'])->name('Booking.new-client');
Route::post('/comment', [App\Http\Controllers\CommentsController::class,'store']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

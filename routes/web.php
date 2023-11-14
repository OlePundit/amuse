<?php

use Illuminate\Support\Facades\Route;
use App\Mail\BookingConfirmationEmail;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('cache.headers:private;max_age=3600');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog')->middleware('cache.headers:private;max_age=3600');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show')->middleware('cache.headers:private;max_age=3600');
Route::get('/camps/{slug}', [App\Http\Controllers\CampsController::class, 'show'])->name('camp.show')->middleware('cache.headers:private;max_age=3600');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('Contact.contact')->middleware('cache.headers:private;max_age=3600');
Route::post('/store-contact', [App\Http\Controllers\ContactController::class, 'store'])->name('Contact.store')->middleware('cache.headers:private;max_age=3600');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('About.about')->middleware('cache.headers:private;max_age=3600');
Route::get('/children/create', [App\Http\Controllers\ChildrenController::class, 'create'])->name('Children.create')->middleware('cache.headers:private;max_age=3600');
Route::post('/children', [App\Http\Controllers\ChildrenController::class, 'store'])->name('Children.store');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('Profile.edit')->middleware('cache.headers:private;max_age=3600');
Route::get('/booking/create', [App\Http\Controllers\BookingController::class, 'create'])->name('Booking.create')->middleware('cache.headers:private;max_age=3600');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'store'])->name('Booking.store');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('Profile.update');

Route::get('/client-booking/{user}', [App\Http\Controllers\BookingController::class, 'client'])->name('Profile.client')->middleware('cache.headers:private;max_age=3600');

Route::post('/new-client-booking', [App\Http\Controllers\BookingController::class, 'clientstore'])->name('Booking.new-client');
Route::post('/comment', [App\Http\Controllers\CommentsController::class,'store']);
Route::get('/coach_dashboard', [App\Http\Controllers\CoachesController::class,'index'])->middleware('cache.headers:private;max_age=3600');
Route::get('/reports/create', [App\Http\Controllers\CoachesController::class,'create'])->middleware('cache.headers:private;max_age=3600');
Route::post('/reports', [App\Http\Controllers\CoachesController::class,'store']);
Route::get('/email', function() {
    return new BookingConfirmationEmail();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


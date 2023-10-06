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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('Contact.contact');


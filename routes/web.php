<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
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

// Route::get('/', function () {
//     return view('Home');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('resume', 'resume')->name('home.resume');
    Route::get('projects', 'project')->name('home.projects');
    Route::get('contact', 'contact')->name('home.contact');
    Route::get('privacy', 'privacy')->name('home.privacy');
    Route::get('terms', 'terms')->name('home.terms');

    // API Route

    Route::get('about', 'about');
    Route::get('hero-properties', 'heroProperties');
    Route::get('social', 'socialLink');
});

//  All API Route

Route::controller(ResumeController::class)->group(function () {
    Route::get('experiences', 'experiences');
    Route::get('education', 'education');
    Route::get('skill', 'professionalSkill');
    Route::get('language', 'language');
});

Route::get('project', [ProjectController::class, 'project']);
Route::post('/contact-request', [ContactController::class, 'contactRequewst']);
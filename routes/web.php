<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//JobListing Page
Route::get('/jobs', [JobListController::class, 'index'])->name('jobs.index');
//Job Details  Page
Route::get('/jobs/{job:slug}', [JobListController::class, 'show'])->name('jobs.show');
//Page Details
Route::get('/page/{page:slug}', [Pages::class, 'show'])->name('pages.index');

//UserBecomeClient
Route::post('/profile/become-client', [ProfileController::class, 'becomeClient'])
    ->name('profile.become-client');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //JobList
    Route::post('/jobs/create', [JobController::class, 'store'])->name('jobs.store');
});

<?php

use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Applicants\StatusController;
use App\Http\Controllers\ProfileController;
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

Route::get('/application-status', StatusController::class)->name('applicationstatus');

Route::get('/job-openings', function(){
    return view('applicants.jobopenings');
})->name('alljobs');

Route::get('/job-openings/details/', function(){
    return view('applicants.jobdetails');
})->name('jobdetails');

Route::get('/job-openings/details/apply', function(){
    return view('applicants.jobapply');
})->name('jobapply');

Route::get('/job-updates', function(){
    return view('applicants.jobupdates');
})->name('jobupdates');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function() {
        Route::resource('jobs', JobsController::class);
    });
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

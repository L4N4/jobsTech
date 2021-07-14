<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\CreateVacancyController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('detalle-vacante/{vacancy}', [PageController::class, 'vacancyDetails'])->name('vacancyDetails');

Route::view('updateDev', 'profile.update-profile-information-dev')->name('updateDev');
Route::view('updateRec', 'profile.update-profile-information-rec')->name('updateRec');

Route::resource('adminVac', CreateVacancyController::class, ['names' => 'vacancy']);

Route::view('createVac', 'vacancyRegistration')->name('createVac');

Route::view('candidates', 'candidates-vacancy')->name('candidates');
Route::view('myprofilerec', 'myprofilerec')->name('myprofilerec');
Route::view('myprofiledev', 'myprofiledev')->name('myprofiledev');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', [PageController::class, 'home'])->name('home');

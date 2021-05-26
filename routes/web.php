<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('detalle-vacante/{vacancy}', [PageController::class, 'vacancyDetails'])->name('vacancyDetails');
Route::view('updateDev', 'profile.update-profile-information-dev')->name('updateDev');
Route::view('updateRec', 'profile.update-profile-information-rec')->name('updateRec');
Route::view('createVac', 'vacancy-registration')->name('createVac');
Route::view('adminVac', 'vacancy-admin')->name('adminVac');
Route::view('candidates', 'candidates-vacancy')->name('candidates');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

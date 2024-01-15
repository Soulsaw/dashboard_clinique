<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\SpecialiteController;
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
Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store'])->name('patients.create');
Route::get('/medecins', [MedecinController::class, 'index']);
Route::get('/specialites', [SpecialiteController::class, 'index']);
Route::post('/specialites', [SpecialiteController::class, 'store'])->name('specialites.create');
Route::get('/rendezvous', [RendezVousController::class, 'index']);
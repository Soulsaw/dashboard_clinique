<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\SpecialiteController;
use Faker\Guesser\Name;
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

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/patients', [PatientController::class, 'index'])->name('patients');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.create');

Route::get('/medecins', [MedecinController::class, 'index'])->name('medecins');
Route::post('/medecins', [MedecinController::class, 'store'])->name('medecins.create');

Route::get('/specialites', [SpecialiteController::class, 'index'])->name('specialites');
Route::post('/specialites', [SpecialiteController::class, 'store'])->name('specialites.create');


Route::get('/rendezvous', [RendezVousController::class, 'index'])->name('rendezvous');
Route::post('/rendezvous', [RendezVousController::class, 'store'])->name('rendezvous.create');
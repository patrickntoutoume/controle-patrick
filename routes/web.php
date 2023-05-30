<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EvenementController;
use App\Models\Evenement;
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

Route::get('/' ,[AppController::class, 'index'])-> name('home');

Route::get('/save' ,[EvenementController::class, 'event'])-> name('event');

Route::get('/liste', [EvenementController::class, 'liste_event'])->name('liste');

Route::post('save_prod', [EvenementController::class, 'save_produit'])->name('save');

Route::get('supprimer/{id}', [EvenementController::class, 'supprimer'])->name('supprimer');

Route::get('update/{id}', [EvenementController::class, 'update'])->name('update');

Route::put('update_prod/{id}', [EvenementController::class, 'update_prod'])->name('update_event');




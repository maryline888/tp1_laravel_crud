<?php

use App\Http\Controllers\EtudiantsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EtudiantsController::class, 'index'])->name('etudiants.index');
Route::get('/index', [EtudiantsController::class, 'index'])->name('etudiants.index');
Route::get('/etudiant/{etudiants}', [EtudiantsController::class, 'show'])->name('etudiants.show');

Route::get('/etudiant-ajout', [EtudiantsController::class, 'create'])->name('etudiants.create');
Route::post('/etudiant-ajout', [EtudiantsController::class, 'store']);


Route::get('/etudiant-edit/{etudiants}', [EtudiantsController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiant-edit/{etudiants}', [EtudiantsController::class, 'update']);

Route::delete('/etudiant/{etudiants}', [EtudiantsController::class, 'destroy'])->name('etudiants.destroy');

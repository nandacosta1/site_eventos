<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}',[EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/delete/{id}', [EventController::class, 'destroy'])->name('delete.evento');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('events/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvents'])->middleware('auth')->name('confirmar.presenca');

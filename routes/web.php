<?php

use App\Http\Controllers\PublicController;
use App\Models\Annuouncement;
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

Route::get('/',[PublicController::class, 'home'])->name('homepage');

//Rotta create announcement
Route::get('/announcement/create', [Annuouncement::class, 'create'])->name('announement_create');

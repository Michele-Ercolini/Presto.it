<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
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

// Rotta create announcement
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcement_create');

// Rotta index announcement
Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement_index');

// Rotta show announcement
Route::get('/annoucenment/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement_detail');

// Rotta per la vista di ogni categoria
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('category_show');
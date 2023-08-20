<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

// Rotta per il profilo
Route::get('/user/profile', [PublicController::class, 'profile'])->name('user_profile');

// Rotta per la vista di ogni categoria
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('category_show');



/* ROTTA ANNOUNCEMENT */

// Rotta create announcement
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcement_create');

// Rotta index announcement
Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement_index');

// Rotta show announcement
Route::get('/annoucenment/show/{announcement}', [AnnouncementController::class, 'show'])->name('announcement_detail');



/* ROTTA REVISOR */

//Rotta Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor_index');

//Rotta Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor_accept_announcement');

//Rotta Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor_reject_announcement');




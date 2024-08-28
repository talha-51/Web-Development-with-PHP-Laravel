<?php

use App\Http\Controllers\ContactController;
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


Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
// Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts/create', [ContactController::class, 'addContact'])->name('contact.addContact');

Route::get('/contacts/search', [ContactController::class, 'search'])->name('contact.search');

Route::get('/contacts/orderbyName', [ContactController::class, 'orderbyName'])->name('contact.orderbyName');
Route::get('/contacts/orderbyDate', [ContactController::class, 'orderbyDate'])->name('contact.orderbyDate');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');

Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contacts/edit/{id}', [ContactController::class, 'update'])->name('contact.update');

Route::get('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');



<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::get('/', [DishController::class, 'home'])->name('home');

Route::view('/menu', 'menu.index');
Route::get('/menu', [DishController::class, 'index'])->name('menu.index');

Route::get('/contact', [ContactController::class, 'ShowForm']);
Route::post('/contact',[ContactController::class, 'storeMessage']);

Route::view('/reservations', 'orders.reservations.create');

Route::view('/login', 'auth.login');

Route::view('/cart', 'cart.index');



Route::view('/admin', 'admin.dashboard');

Route::view('/admin/dishes', 'admin.dishes.index');

Route::view('/admin/dishes/create', 'admin.dishes.create');

Route::view('/admin/reservations', 'admin.reservations.index');

Route::view('/admin/orders', 'admin.orders.index');

Route::get('/admin/messages', [MessageController::class, 'index']);

Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->name('message.destroy');


Route::view('/admin/users', 'admin.users.index');
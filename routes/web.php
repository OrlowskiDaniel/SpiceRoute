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

Route::get('/reservations', [ReservationController::class, 'create']);
Route::post('/reservations', [ReservationController::class, 'store']);

Route::view('/cart', 'cart.index');



Route::view('/admin', 'admin.dashboard');

Route::view('/admin/dishes', 'admin.dishes.index');

Route::get('/admin/dishes', [DishController::class, 'indexAdmin']);
Route::get('/admin/dishes/create', [DishController::class, 'create']);
Route::post('/admin/dishes', [DishController::class, 'store']);
Route::delete('/admin/dishes/{dish}', [DishController::class, 'destroy']);

Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::delete('/admin/reservations/{reservation}', [ReservationController::class, 'destroy']);

Route::view('/admin/orders', 'admin.orders.index');

Route::get('/admin/messages', [MessageController::class, 'index']);
Route::get('/admin/users', [UserController::class, 'index']);
Route::delete('/admin/users/{user}', [UserController::class, 'destroy']);

Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->name('message.destroy');


Route::view('/admin/users', 'admin.users.index');
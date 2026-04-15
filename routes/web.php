<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


// Public
Route::get('/', [DishController::class, 'home'])->name('home');
Route::get('/menu', [DishController::class, 'index'])->name('menu.index');

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'storeMessage']);

Route::get('/reservations', [ReservationController::class, 'create']);
Route::post('/reservations', [ReservationController::class, 'store']);

Route::view('/cart', 'cart.index');

// Orders
Route::view('/checkout', 'orders.checkout');
Route::post('/orders', [OrderController::class, 'store']);
Route::view('/success', 'orders.success');

// Admin
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/messages', [MessageController::class, 'index']);
Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy']);
Route::post('/admin/messages/{message}/reply', [MessageController::class, 'reply']);
// middleware for admin routes
Route::middleware('auth')->group(function () {

Route::get('/admin/dishes', [DishController::class, 'indexAdmin']);
Route::get('/admin/dishes/create', [DishController::class, 'create']);
Route::post('/admin/dishes', [DishController::class, 'store']);
Route::delete('/admin/dishes/{dish}', [DishController::class, 'destroy']);

Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::delete('/admin/reservations/{reservation}', [ReservationController::class, 'destroy']);

Route::get('/admin/orders', [OrderController::class, 'index']);
Route::get('/admin/orders/{order}', [OrderController::class, 'show']);
Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy']);
Route::post('/admin/orders/{order}/status', [OrderController::class, 'updateStatus']);

    Route::get('/admin/dishes', [DishController::class, 'indexAdmin']);
    Route::get('/admin/dishes/create', [DishController::class, 'create']);
    Route::post('/admin/dishes', [DishController::class, 'store']);
    Route::delete('/admin/dishes/{dish}', [DishController::class, 'destroy']);
    Route::get('/admin/dishes/{dish}/edit', [DishController::class, 'edit']);
    Route::put('/admin/dishes/{dish}', [DishController::class, 'update']);
});

Route::get('/admin/users', [UserController::class, 'index']);
Route::delete('/admin/users/{user}', [UserController::class, 'destroy']);


Route::post('/cart/add/{dish}', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/remove/{dish}', [CartController::class, 'remove']);


<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/menu', 'menu.index');

Route::view('/contact', 'contact');

Route::view('/reservations', 'orders.reservations.create');

Route::view('/login', 'auth.login');

Route::view('/cart', 'cart.index');



Route::view('/admin', 'admin.dashboard');

Route::view('/admin/dishes', 'admin.dishes.index');

Route::view('/admin/dishes/create', 'admin.dishes.create');

Route::view('/admin/reservations', 'admin.reservations.index');

Route::view('/admin/orders', 'admin.orders.index');

Route::view('/admin/messages', 'admin.messages.index');
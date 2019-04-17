<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Testing Route
// Route::get('/wel', 'DashboardController@index');

// Landing Page
Route::get('/', function () {
    return view('index');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Agents
Route::prefix('admin')->group(function () {
    Route::resource('/agents', 'AgentController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/busses', 'BusController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/routes', 'RouteController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/tickets', 'TicketController')->only(['index', 'store', 'update', 'destroy']);
});

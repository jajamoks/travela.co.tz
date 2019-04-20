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

// Prefix Admin
Route::prefix('admin')->group(function () {
    // Bus
    Route::get('/busses/add_bus', 'BusController@create');
    Route::resource('/busses', 'BusController')->only(['index', 'store', 'update', 'destroy']);

    // Route
    Route::get('/routes/add_route', 'RouteController@create');
    Route::resource('/routes', 'RouteController')->only(['index', 'update', 'destroy']);

    // Agents
    Route::resource('/agents', 'AgentController')->only(['index', 'store', 'update', 'destroy']);

    // Tickets
    Route::resource('/tickets', 'TicketController')->only(['index', 'store', 'update', 'destroy']);
});

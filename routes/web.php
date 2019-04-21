<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Testing Route
Route::get('/test');

// Landing Page
Route::get('/', function () {
    return view('index');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Prefix Admin
Route::prefix('admin')->group(function () {
    // Passengers
    Route::resource('/passengers', 'PassengerController')->only(['index', 'store', 'update', 'destroy']);

    // Bus
    Route::get('/busses/add_bus', 'BusController@create');
    Route::resource('/busses', 'BusController')->only(['index', 'store', 'update', 'destroy']);

    // Route
    Route::get('/routes/add_route', 'RouteController@create');
    Route::resource('/routes', 'RouteController')->only(['index', 'update', 'store', 'destroy']);

    // Agents
    Route::get('/agents/add_agent', 'AgentController@create');
    Route::resource('/agents', 'AgentController')->only(['index', 'store', 'update', 'destroy']);

    // Tickets
    Route::get('/tickets/new_ticket', 'TicketController@create');
    Route::resource('/tickets', 'TicketController')->only(['index', 'store', 'update', 'destroy']);
});

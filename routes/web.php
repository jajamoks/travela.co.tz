<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Testing Route
Route::get('/test');

// Landing Page
Route::get('/', 'HomeController@index');

// Dashboard
Route::get('/dashboard', 'DashboardController@index');

// Prefix Admin
Route::prefix('admin')->group(function () {
    // Passengers
    Route::resource('/passengers', 'PassengerController')->only(['index', 'store', 'update', 'destroy']);

    // Bus
    Route::get('/busses/addBus', 'BusController@create');
    Route::resource('/busses', 'BusController')->only(['index', 'store', 'update', 'destroy']);

    // Route
    Route::get('/routes/addRoute', 'RouteController@create');
    Route::resource('/routes', 'RouteController')->only(['index', 'update', 'store', 'destroy']);

    // Agents
    Route::get('/agents/addAgent', 'AgentController@create');
    Route::resource('/agents', 'AgentController')->only(['index', 'store', 'update', 'destroy']);

    // Tickets
    Route::get('/tickets/newTicket', 'TicketController@create');
    Route::resource('/tickets', 'TicketController')->only(['index', 'store', 'update', 'destroy']);
});

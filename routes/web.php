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

// Change Password
Route::get('/changePassword', 'PasswordController@index');
Route::post('/changePasswordForm', 'PasswordController@update');


// Prefix Admin
Route::prefix('admin')->group(function () {
    // Staffs
    Route::get('/staffs/addStaff', 'StaffController@create');
    Route::resource('/staffs','StaffController')->only(['index','store']);
    Route::delete('/staffs/{id?}', 'StaffController@destroy');

    // Passengers
    Route::resource('/passengers', 'PassengerController')->only(['index', 'store', 'update', 'destroy']);

    // Bus
    Route::get('/busses/addBus', 'BusController@create');
    Route::resource('/busses', 'BusController')->only(['index', 'store']);
    Route::delete('/busses/{id?}', 'BusController@destroy');

    // Route
    Route::get('/routes/addRoute', 'RouteController@create');
    Route::resource('/routes', 'RouteController')->only(['index', 'store']);
    Route::delete('/routes/{id?}', 'RouteController@destroy');

    // Tickets
    Route::get('/tickets/newTicket', 'TicketController@create');
    Route::resource('/tickets', 'TicketController')->only(['index', 'store', 'update', 'destroy']);

    // Schedule
    Route::get('/schedule/scheduleTrip', 'ScheduleController@create');
    Route::resource('/schedules', 'ScheduleController')->only(['index', 'store', 'update', 'destroy']);
});

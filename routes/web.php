<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', 'DashboardController@index');

// Agents Routes
Route::prefix('admin')->group(function () {
    Route::resource('/agents', 'AgentController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/busses', 'AgentController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/routes', 'AgentController')->only(['index', 'store', 'update', 'destroy']);
});

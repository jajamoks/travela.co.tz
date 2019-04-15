<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/agents', 'AgentController@index');

Route::post('/agents/create', 'AgentController@create');

Route::get('/home', 'AgentController@create');

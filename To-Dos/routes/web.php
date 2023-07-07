<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index');

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/create', 'TaskController@create');

Route::post('/tasks', 'TaskController@store');

Route:: patch('/tasks/{id}', 'TaskController@update');

Route:: delete('/tasks/{id}', 'TaskController@delete');
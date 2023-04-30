<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('maria-luiza', ['uses' => 'MemeController@index']);

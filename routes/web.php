<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




//route tests
Route::get('test', function () {
    return view('panel.layouts.app');
});

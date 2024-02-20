<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ciadadao_nacional/pesquisa', function () {
    return view('ciadadao_nacional.pesquisa');
});



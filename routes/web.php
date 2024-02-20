<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/ciadadao_nacional/registrar', function () {
    return view('ciadadao_nacional.registrar');
});

Route::get('/ciadadao_nacional/pesquisa', function () {
    return view('ciadadao_nacional.pesquisa');
});



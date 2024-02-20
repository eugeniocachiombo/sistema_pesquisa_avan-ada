<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CidadaoNacionalController;

Route::get('/ciadadao_nacional/registrar', [CidadaoNacionalController::class, 'registroView']);
Route::get('/ciadadao_nacional/pesquisa', [CidadaoNacionalController::class, 'pesquisaView']);



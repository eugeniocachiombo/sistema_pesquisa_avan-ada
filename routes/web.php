<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadaoNacionalController;

Route::get('/ciadadao_nacional/registro', [CidadaoNacionalController::class, 'registroView']);
Route::get('/ciadadao_nacional/pesquisa', [CidadaoNacionalController::class, 'pesquisaView']);
Route::post('/ciadadao_nacional/registro', [CidadaoNacionalController::class, 'registrarDados']);
Route::post('/ciadadao_nacional/pesquisa', [CidadaoNacionalController::class, 'pesquisarDados']);



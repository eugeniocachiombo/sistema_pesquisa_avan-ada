<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadaoNacionalController;

Route::get('/ciadadao_nacional/registro', [CidadaoNacionalController::class, 'registrarView']);
Route::post('/ciadadao_nacional/registro', [CidadaoNacionalController::class, 'registrarDados']);
Route::get('/ciadadao_nacional/pesquisa', [CidadaoNacionalController::class, 'pesquisarView']);
Route::post('/cidadao_nacional/pesquisa/dados_pessoais', [CidadaoNacionalController::class, 'pesquisarDadosPessoais']);



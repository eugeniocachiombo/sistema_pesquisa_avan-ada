<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadaoNacionalController;

Route::get('/', [CidadaoNacionalController::class, 'pesquisarView']);
Route::get('/cidadao_nacional/pesquisa/dados_pessoais', [CidadaoNacionalController::class, 'pesquisarDadosPessoais']);



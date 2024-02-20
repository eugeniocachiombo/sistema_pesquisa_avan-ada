<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadaoNacionalController extends Controller
{
    function registroView() {
        return view('ciadadao_nacional.registrar');
    }

    function pesquisaView() {
        return view('ciadadao_nacional.pesquisa');
    }

    function registrar() {
        return view('ciadadao_nacional.registrar');
    }

    function pesquisar() {
        return view('ciadadao_nacional.pesquisa');
    }
}

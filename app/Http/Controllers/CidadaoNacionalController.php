<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadaoNacionalController extends Controller
{
    function registroView() {
        return view('ciadadao_nacional.registro');
    }

    function pesquisaView() {
        return view('ciadadao_nacional.pesquisa');
    }

    function registrarDados(Request $request) {
        /*$cidadao = new CidadaoNacional();
        $cidadao = [
            "nome", $request->input("nome")
        ];
        return view('ciadadao_nacional.registro', compact("cidadao"));*/
    }

    function pesquisarDados(Request $request) {
        $dia = ($request->input("dia")) ? $request->input("dia") : "04";
        $mes = ($request->input("mes")) ? $request->input("mes") : "04";
        $ano = ($request->input("ano")) ? $request->input("ano") : "2019";
        $dataEmissao =  $ano . "-" . $mes . "-" . $dia;
        $query = DB::select('
        select * from cidadao_nacional
         where data_emissao = ?',
        [$dataEmissao]);
        $resultado = $query;
        return view('ciadadao_nacional.pesquisa', compact("resultado"));
    }
}

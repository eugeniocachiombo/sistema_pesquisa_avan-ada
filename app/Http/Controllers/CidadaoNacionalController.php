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
        $mes_inicial = ($request->input("mes_inicial")) ? $request->input("mes_inicial") : "";
        $ano_inicial = ($request->input("ano_inicial")) ? $request->input("ano_inicial") : "";
        $mes_terminal = ($request->input("mes_terminal")) ? $request->input("mes_terminal") : "";
        $ano_terminal = ($request->input("ano_terminal")) ? $request->input("ano_terminal") : "";
        
        $data_inicial = $ano_inicial . "-" . $mes_inicial ;
        $data_terminal = $ano_terminal . "-" . $mes_terminal ;
         
        if(!empty($data_inicial) && !empty($data_terminal)){
            $data_inicial_tratado = $data_inicial . "-01";
            $data_terminal_tratado = $data_terminal . "-31";
            $query = DB::select('
            select * from cidadao_nacional
            where data_emissao between ? and ?',
            [$data_inicial_tratado, $data_terminal_tratado]);
            $resultado = $query;
            return view('ciadadao_nacional.pesquisa', compact("resultado"));
        } else if(!empty($data_inicial) ) {
            $data_inicial_tratado = $data_inicial . "-01";
            $query = DB::select('
            select * from cidadao_nacional
            where data_emissao = ?',
            [$data_inicial_tratado]);
            $resultado = $query;
            return view('ciadadao_nacional.pesquisa', compact("resultado"));
        }
    }
}
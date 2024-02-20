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
        $data_inicial = ($request->input("data_inicial")) ? $request->input("data_inicial") : "";
        $data_terminal = ($request->input("data_terminal")) ? $request->input("data_terminal") : "";
        
        if(!empty($data_inicial) && !empty($data_terminal)){
            $data_inicial_tratado = explode("-", $data_inicial);
            $data_terminal_tratado = explode("-", $data_terminal);
            $data_emissao_inicial =  $data_inicial_tratado[2] . "-" . $data_inicial_tratado[1] . "-" . $data_inicial_tratado[0];
            $data_emissao_final =  $data_terminal_tratado[2] . "-" . $data_terminal_tratado[1] . "-" . $data_terminal_tratado[0];
            $query = DB::select('
            select * from cidadao_nacional
            where data_emissao between ? and ?',
            [$data_emissao_inicial, $data_emissao_final]);
            $resultado = $query;
            return view('ciadadao_nacional.pesquisa', compact("resultado"));
        } else if(!empty($data_inicial) ) {
            $data_inicial_tratado = explode("-", $data_inicial);
            $data_emissao =  $data_inicial_tratado[2] . "-" . $data_inicial_tratado[1] . "-" . $data_inicial_tratado[0];
            $query = DB::select('
            select * from cidadao_nacional
            where data_emissao = ?',
            [$data_emissao]);
            $resultado = $query;
            return view('ciadadao_nacional.pesquisa', compact("resultado"));
        }
    }
}
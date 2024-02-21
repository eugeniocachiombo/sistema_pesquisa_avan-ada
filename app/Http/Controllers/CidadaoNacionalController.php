<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadaoNacionalController extends Controller
{
    function registrarView() {
        return view('ciadadao_nacional.registro');
    }

    function pesquisarView() {
        return view('ciadadao_nacional.pesquisa');
    }

    function registrarDados(Request $request) {
        /*$cidadao = new CidadaoNacional();
        $cidadao = [
            "nome", $request->input("nome")
        ];
        return view('ciadadao_nacional.registro', compact("cidadao"));*/
    }

    function pesquisarPorDataEmissao(Request $request) {
        $mes_inicial_emissao = ($request->input("mes_inicial_emissao")) ? $request->input("mes_inicial_emissao") : "";
        $ano_inicial_emissao = ($request->input("ano_inicial_emissao")) ? $request->input("ano_inicial_emissao") : "";
        $mes_terminal_emissao = ($request->input("mes_terminal_emissao")) ? $request->input("mes_terminal_emissao") : "";
        $ano_terminal_emissao = ($request->input("ano_terminal_emissao")) ? $request->input("ano_terminal_emissao") : "";
        
        $data_inicial_emissao = $ano_inicial_emissao . "-" . $mes_inicial_emissao;
        $data_terminal_emissao = $ano_terminal_emissao . "-" . $mes_terminal_emissao;
        $resultado = $this->validarPesquisaEmissao($data_inicial_emissao, $data_terminal_emissao);
        return view('ciadadao_nacional.pesquisa', compact("resultado"));
    }

    function validarPesquisaEmissao($data_inicial_emissao, $data_terminal_emissao){
        if(!empty($data_inicial_emissao) && !empty($data_terminal_emissao) && $data_terminal_emissao != "-"){
            $data_inicial_tratada = $data_inicial_emissao . "-01";
            $data_terminal_tratado = $data_terminal_emissao . "-31";
            $query = DB::select('
            select * from cidadao_nacional
            where data_emissao between ? and ?',
            [$data_inicial_tratada, $data_terminal_tratado]);
            return $query;
        } else if(!empty($data_inicial_emissao)) {
            $data_inicial_tratada = explode("-", $data_inicial_emissao);
            $mes_emissao = $data_inicial_tratada[1];
            $ano_emissao = $data_inicial_tratada[0];
            $query = DB::select("
            SELECT * FROM cidadao_nacional
            where month(data_emissao) = ? and year(data_emissao) = ?",
            [$mes_emissao, $ano_emissao]);
            return $query;
        }
    }
}
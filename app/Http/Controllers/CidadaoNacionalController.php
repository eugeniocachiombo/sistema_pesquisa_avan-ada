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

    function pesquisarPorDataValidade(Request $request) {
        $mes_inicial_validade = ($request->input("mes_inicial_validade")) ? $request->input("mes_inicial_validade") : "";
        $ano_inicial_validade = ($request->input("ano_inicial_validade")) ? $request->input("ano_inicial_validade") : "";
        $mes_terminal_validade = ($request->input("mes_terminal_validade")) ? $request->input("mes_terminal_validade") : "";
        $ano_terminal_validade = ($request->input("ano_terminal_validade")) ? $request->input("ano_terminal_validade") : "";
        
        $data_inicial_validade = $ano_inicial_validade . "-" . $mes_inicial_validade;
        $data_terminal_validade = $ano_terminal_validade . "-" . $mes_terminal_validade;
        $resultado = $this->validarPesquisavalidade($data_inicial_validade, $data_terminal_validade);
        return view('ciadadao_nacional.pesquisa', compact("resultado"));
    }

    function validarPesquisaValidade($data_inicial_validade, $data_terminal_validade){
        if(!empty($data_inicial_validade) && !empty($data_terminal_validade) && $data_terminal_validade != "-"){
            $data_inicial_tratada = $data_inicial_validade . "-01";
            $data_terminal_tratado = $data_terminal_validade . "-31";
            $query = DB::select('
            select * from cidadao_nacional
            where data_validade between ? and ?',
            [$data_inicial_tratada, $data_terminal_tratado]);
            return $query;
        } else if(!empty($data_inicial_validade)) {
            $data_inicial_tratada = explode("-", $data_inicial_validade);
            $mes_validade = $data_inicial_tratada[1];
            $ano_validade = $data_inicial_tratada[0];
            $query = DB::select("
            SELECT * FROM cidadao_nacional
            where month(data_validade) = ? and year(data_validade) = ?",
            [$mes_validade, $ano_validade]);
            return $query;
        }
    }

    function pesquisarPorDataNascimento(Request $request) {
        $mes_inicial_nascimento = ($request->input("mes_inicial_nascimento")) ? $request->input("mes_inicial_nascimento") : "";
        $ano_inicial_nascimento = ($request->input("ano_inicial_nascimento")) ? $request->input("ano_inicial_nascimento") : "";
        $mes_terminal_nascimento = ($request->input("mes_terminal_nascimento")) ? $request->input("mes_terminal_nascimento") : "";
        $ano_terminal_nascimento = ($request->input("ano_terminal_nascimento")) ? $request->input("ano_terminal_nascimento") : "";
        
        $data_inicial_nascimento = $ano_inicial_nascimento . "-" . $mes_inicial_nascimento;
        $data_terminal_nascimento = $ano_terminal_nascimento . "-" . $mes_terminal_nascimento;
        $resultado = $this->validarPesquisanascimento($data_inicial_nascimento, $data_terminal_nascimento);
        return view('ciadadao_nacional.pesquisa', compact("resultado"));
    }

    function validarPesquisaNascimento($data_inicial_nascimento, $data_terminal_nascimento){
        if(!empty($data_inicial_nascimento) && !empty($data_terminal_nascimento) && $data_terminal_nascimento != "-"){
            $data_inicial_tratada = $data_inicial_nascimento . "-01";
            $data_terminal_tratado = $data_terminal_nascimento . "-31";
            $query = DB::select('
            select * from cidadao_nacional
            where data_nascimento between ? and ?',
            [$data_inicial_tratada, $data_terminal_tratado]);
            return $query;
        } else if(!empty($data_inicial_nascimento)) {
            $data_inicial_tratada = explode("-", $data_inicial_nascimento);
            $mes_nascimento = $data_inicial_tratada[1];
            $ano_nascimento = $data_inicial_tratada[0];
            $query = DB::select("
            SELECT * FROM cidadao_nacional
            where month(data_nascimento) = ? and year(data_nascimento) = ?",
            [$mes_nascimento, $ano_nascimento]);
            return $query;
        }
    }
}
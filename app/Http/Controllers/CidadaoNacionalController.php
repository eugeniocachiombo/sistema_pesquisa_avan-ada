<?php

namespace App\Http\Controllers;

use App\Models\CidadaoNacional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadaoNacionalController extends Controller
{

    public function pesquisarView()
    {
        return view('ciadadao_nacional.pesquisa.pesquisa');
    }

    public function pesquisarDadosPessoais(Request $request)
    {
        $nome = $request->input("nome");
        $numero_bi = $request->input("numero_bi");
        $naturalidade = $request->input("naturalidade");
        $nome_pai = $request->input("nome_pai");
        $nome_mae = $request->input("nome_mae");
        $sexo = $request->input("sexo");
        $estado_civil = $request->input("estado_civil");
        $altura = $request->input("altura");
        $residencia = $request->input("residencia");
        $provincia = $request->input("provincia");

        $mes_emissao_inicial = $request->input("mes_emissao_inicial");
        $ano_emissao_inicial = $request->input("ano_emissao_inicial");
        $mes_emissao_terminal = $request->input("mes_emissao_terminal");
        $ano_emissao_terminal = $request->input("ano_emissao_terminal");

        $mes_validade_inicial = $request->input("mes_validade_inicial");
        $ano_validade_inicial = $request->input("ano_validade_inicial");
        $mes_validade_terminal = $request->input("mes_validade_terminal");
        $ano_validade_terminal = $request->input("ano_validade_terminal");

        $mes_nascimento_inicial = $request->input("mes_nascimento_inicial");
        $ano_nascimento_inicial = $request->input("ano_nascimento_inicial");
        $mes_nascimento_terminal = $request->input("mes_nascimento_terminal");
        $ano_nascimento_terminal = $request->input("ano_nascimento_terminal");

        $condicao = CidadaoNacional::query();
        $componentes = [
            "nome" => $nome,
            "numero_bi" => $numero_bi,
            "naturalidade" => $naturalidade,
            "nome_pai" => $nome_pai,
            "nome_mae" => $nome_mae,
            "sexo" => $sexo,
            "estado_civil" => $estado_civil,
            "altura" => $altura,
            "residencia" => $residencia,
            "provincia" => $provincia,
            "mes_emissao_inicial" => $mes_emissao_inicial,
            "ano_emissao_inicial" => $ano_emissao_inicial,
            "mes_emissao_terminal" => $mes_emissao_terminal,
            "ano_emissao_terminal" => $ano_emissao_terminal,
            "mes_validade_inicial" => $mes_validade_inicial,
            "ano_validade_inicial" => $ano_validade_inicial,
            "mes_validade_terminal" => $mes_validade_terminal,
            "ano_validade_terminal" => $ano_validade_terminal,
            "mes_nascimento_inicial" => $mes_nascimento_inicial,
            "ano_nascimento_inicial" => $ano_nascimento_inicial,
            "mes_nascimento_terminal" => $mes_nascimento_terminal,
            "ano_nascimento_terminal" => $ano_nascimento_terminal,
        ];

        $componentes = array_filter($componentes);
        if(empty($componentes)){
            return redirect('/')->with("notificacao", "Por favor, fornece as informações para prosseguir com a pesquisa");
        }else{
            $nova_condicao = $this->verficarComponentesComValores($componentes, $condicao);
            $resultado = $nova_condicao->paginate(5);
            return view('ciadadao_nacional.pesquisa.pesquisa', compact("resultado"));
        }
    }

    public function verficarComponentesComValores($componentes, $condicao)
    {
        if (!empty($componentes['nome'])) {
            $condicao->where("nome", $componentes['nome']);
        }

        if (!empty($componentes['numero_bi'])) {
            $condicao->where("numero_bi", $componentes['numero_bi']);
        }

        if (!empty($componentes['naturalidade'])) {
            $condicao->where("naturalidade", $componentes['naturalidade']);
        }

        if (!empty($componentes['nome_pai'])) {
            $condicao->where("nome_pai", $componentes['nome_pai']);
        }

        if (!empty($componentes['nome_mae'])) {
            $condicao->where("nome_mae", $componentes['nome_mae']);
        }

        if (!empty($componentes['sexo'])) {
            $condicao->where("sexo", $componentes['sexo']);
        }

        if (!empty($componentes['estado_civil'])) {
            $condicao->where("estado_civil", $componentes['estado_civil']);
        }

        if (!empty($componentes['altura'])) {
            $condicao->where("altura", $componentes['altura']);
        }

        if (!empty($componentes['residencia'])) {
            $condicao->where("residencia", $componentes['residencia']);
        }

        if (!empty($componentes['provincia'])) {
            $condicao->where("provincia", $componentes['provincia']);
        }

        if (!empty($componentes['mes_nascimento_terminal']) && !empty($componentes['ano_nascimento_terminal']) && !empty($componentes['mes_nascimento_inicial']) && !empty($componentes['ano_nascimento_inicial'])) {
            $nascimento_inicial_tratado = $componentes['ano_nascimento_inicial'] . "-" . $componentes['mes_nascimento_inicial'] . "-01";
            $nascimento_terminal_tratado = $componentes['ano_nascimento_terminal'] . "-" . $componentes['mes_nascimento_terminal'] . "-31";
            $condicao->whereBetween("data_nascimento", [$nascimento_inicial_tratado, $nascimento_terminal_tratado]);
        } else if (!empty($componentes['mes_nascimento_inicial']) && !empty($componentes['ano_nascimento_inicial'])) {
            $condicao->whereMonth("data_nascimento", $componentes['mes_nascimento_inicial']);
            $condicao->whereYear("data_nascimento", $componentes['ano_nascimento_inicial']);
        }

        if (!empty($componentes['mes_emissao_terminal']) && !empty($componentes['ano_emissao_terminal']) && !empty($componentes['mes_emissao_inicial']) && !empty($componentes['ano_emissao_inicial'])) {
            $emissao_inicial_tratado = $componentes['ano_emissao_inicial'] . "-" . $componentes['mes_emissao_inicial'] . "-01";
            $emissao_terminal_tratado = $componentes['ano_emissao_terminal'] . "-" . $componentes['mes_emissao_terminal'] . "-31";
            $condicao->whereBetween("data_emissao", [$emissao_inicial_tratado, $emissao_terminal_tratado]);
        } else if (!empty($componentes['mes_emissao_inicial']) && !empty($componentes['ano_emissao_inicial'])) {
            $condicao->whereMonth("data_emissao", $componentes['mes_emissao_inicial']);
            $condicao->whereYear("data_emissao", $componentes['ano_emissao_inicial']);
        }

        if (!empty($componentes['mes_validade_terminal']) && !empty($componentes['ano_validade_terminal']) && !empty($componentes['mes_validade_inicial']) && !empty($componentes['ano_validade_inicial'])) {
            $validade_inicial_tratado = $componentes['ano_validade_inicial'] . "-" . $componentes['mes_validade_inicial'] . "-01";
            $validade_terminal_tratado = $componentes['ano_validade_terminal'] . "-" . $componentes['mes_validade_terminal'] . "-31";
            $condicao->whereBetween("data_validade", [$validade_inicial_tratado, $validade_terminal_tratado]);
        } else if (!empty($componentes['mes_validade_inicial']) && !empty($componentes['ano_validade_inicial'])) {
            $condicao->whereMonth("data_validade", $componentes['mes_validade_inicial']);
            $condicao->whereYear("data_validade", $componentes['ano_validade_inicial']);
        }

        return $condicao;
    }
}

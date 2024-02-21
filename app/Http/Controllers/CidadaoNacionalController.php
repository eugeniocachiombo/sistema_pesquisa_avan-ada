<?php

namespace App\Http\Controllers;

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
        $input_nome = $request->input("nome");
        $input_numero_bi = $request->input("numero_bi");
        $input_naturalidade = $request->input("naturalidade");
        $input_nome_pai = $request->input("nome_pai");
        $input_nome_mae = $request->input("nome_mae");
        $input_sexo = $request->input("sexo");
        $input_estado_civil = $request->input("estado_civil");
        $input_altura = $request->input("altura");
        $input_residencia = $request->input("residencia");
        $input_provincia = $request->input("provincia");

        $input_mes_emissao_inicial = $request->input("mes_emissao_inicial");
        $input_ano_emissao_inicial = $request->input("ano_emissao_inicial");
        $input_mes_emissao_terminal = $request->input("mes_emissao_terminal");
        $input_ano_emissao_terminal = $request->input("ano_emissao_terminal");

        $input_mes_validade_inicial = $request->input("mes_validade_inicial");
        $input_ano_validade_inicial = $request->input("ano_validade_inicial");
        $input_mes_validade_terminal = $request->input("mes_validade_terminal");
        $input_ano_validade_terminal = $request->input("ano_validade_terminal");

        $input_mes_nascimento_inicial = $request->input("mes_nascimento_inicial");
        $input_ano_nascimento_inicial = $request->input("ano_nascimento_inicial");
        $input_mes_nascimento_terminal = $request->input("mes_nascimento_terminal");
        $input_ano_nascimento_terminal = $request->input("ano_nascimento_terminal");

        $nome = $input_nome ? $input_nome : "";
        $numero_bi = $input_numero_bi ? $input_numero_bi : "";
        $naturalidade = $input_naturalidade ? $input_naturalidade : "";
        $nome_pai = $input_nome_pai ? $input_nome_pai : "";
        $nome_mae = $input_nome_mae ? $input_nome_mae : "";
        $sexo = $input_sexo ? $input_sexo : "";
        $estado_civil = $input_estado_civil ? $input_estado_civil : "";
        $altura = $input_altura ? $input_altura : "";
        $residencia = $input_residencia ? $input_residencia : "";
        $provincia = $input_provincia ? $input_provincia : "";

        $mes_emissao_inicial = $input_mes_emissao_inicial ? $input_mes_emissao_inicial : "";
        $ano_emissao_inicial = $input_ano_emissao_inicial ? $input_ano_emissao_inicial : "";
        $mes_emissao_terminal = $input_mes_emissao_terminal ? $input_mes_emissao_terminal : "";
        $ano_emissao_terminal = $input_ano_emissao_terminal ? $input_ano_emissao_terminal : "";

        $mes_validade_inicial = $input_mes_validade_inicial ? $input_mes_validade_inicial : "";
        $ano_validade_inicial = $input_ano_validade_inicial ? $input_ano_validade_inicial : "";
        $mes_validade_terminal = $input_mes_validade_terminal ? $input_mes_validade_terminal : "";
        $ano_validade_terminal = $input_ano_validade_terminal ? $input_ano_validade_terminal : "";

        $mes_nascimento_inicial = $input_mes_nascimento_inicial ? $input_mes_nascimento_inicial : "";
        $ano_nascimento_inicial = $input_ano_nascimento_inicial ? $input_ano_nascimento_inicial : "";
        $mes_nascimento_terminal = $input_mes_nascimento_terminal ? $input_mes_nascimento_terminal : "";
        $ano_nascimento_terminal = $input_ano_nascimento_terminal ? $input_ano_nascimento_terminal : "";

        $condicao = [];
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
        $nova_condicao = $this->verficarComponentesComValores($componentes, $condicao);
        $resultado = $this->verficarCondicao($nova_condicao);
        if($resultado){
            return view('ciadadao_nacional.pesquisa.pesquisa', compact("resultado"));
        }else{
            return view('ciadadao_nacional.pesquisa.pesquisa');
        }
    }

    public function verficarComponentesComValores($componentes, $condicao)
    {
        if (!empty($componentes['nome'])) {
            $condicao[] = "nome = '{$componentes['nome']}'";
        }

        if (!empty($componentes['numero_bi'])) {
            $condicao[] = "numero_bi = '{$componentes['numero_bi']}'";
        }

        if (!empty($componentes['naturalidade'])) {
            $condicao[] = "naturalidade = '{$componentes['naturalidade']}'";
        }

        if (!empty($componentes['nome_pai'])) {
            $condicao[] = "nome_pai = '{$componentes['nome_pai']}'";
        }

        if (!empty($componentes['nome_mae'])) {
            $condicao[] = "nome_mae = '{$componentes['nome_mae']}'";
        }

        if (!empty($componentes['sexo'])) {
            $condicao[] = "sexo = '{$componentes['sexo']}'";
        }

        if (!empty($componentes['estado_civil'])) {
            $condicao[] = "estado_civil = '{$componentes['estado_civil']}'";
        }

        if (!empty($componentes['altura'])) {
            $condicao[] = "altura = '{$componentes['altura']}'";
        }

        if (!empty($componentes['residencia'])) {
            $condicao[] = "residencia = '{$componentes['residencia']}'";
        }

        if (!empty($componentes['provincia'])) {
            $condicao[] = "provincia = '{$componentes['provincia']}'";
        }

        if (!empty($componentes['mes_nascimento_terminal']) && !empty($componentes['ano_nascimento_terminal']) && !empty($componentes['mes_nascimento_inicial']) && !empty($componentes['ano_nascimento_inicial'])) {
            $nascimento_inicial_tratado = $componentes['ano_nascimento_inicial'] . "-" . $componentes['mes_nascimento_inicial'] . "-01";
            $nascimento_terminal_tratado = $componentes['ano_nascimento_terminal']  . "-" . $componentes['mes_nascimento_terminal'] . "-31";
            $condicao[] = "data_nascimento between '{$nascimento_inicial_tratado}' and '{$nascimento_terminal_tratado}' ";
        } else if (!empty($componentes['mes_nascimento_inicial']) && !empty($componentes['ano_nascimento_inicial'])) {
            $condicao[] = "month(data_nascimento) = '{$componentes['mes_nascimento_inicial']}' and year(data_nascimento) = '{$componentes['ano_nascimento_inicial']}'";
        }

        if (!empty($componentes['mes_emissao_terminal']) && !empty($componentes['ano_emissao_terminal']) && !empty($componentes['mes_emissao_inicial']) && !empty($componentes['ano_emissao_inicial'])) {
            $emissao_inicial_tratado = $componentes['ano_emissao_inicial'] . "-" . $componentes['mes_emissao_inicial'] . "-01";
            $emissao_terminal_tratado = $componentes['ano_emissao_terminal']  . "-" . $componentes['mes_emissao_terminal'] . "-31";
            $condicao[] = "data_emissao between '{$emissao_inicial_tratado}' and '{$emissao_terminal_tratado}' ";
        } else if (!empty($componentes['mes_emissao_inicial']) && !empty($componentes['ano_emissao_inicial'])) {
            $condicao[] = "month(data_emissao) = '{$componentes['mes_emissao_inicial']}' and year(data_emissao) = '{$componentes['ano_emissao_inicial']}'";
        }

        if (!empty($componentes['mes_validade_terminal']) && !empty($componentes['ano_validade_terminal']) && !empty($componentes['mes_validade_inicial']) && !empty($componentes['ano_validade_inicial'])) {
            $validade_inicial_tratado = $componentes['ano_validade_inicial'] . "-" . $componentes['mes_validade_inicial'] . "-01";
            $validade_terminal_tratado = $componentes['ano_validade_terminal']  . "-" . $componentes['mes_validade_terminal'] . "-31";
            $condicao[] = "data_validade between '{$validade_inicial_tratado}' and '{$validade_terminal_tratado}' ";
        } else if (!empty($componentes['mes_validade_inicial']) && !empty($componentes['ano_validade_inicial'])) {
            $condicao[] = "month(data_validade) = '{$componentes['mes_validade_inicial']}' and year(data_validade) = '{$componentes['ano_validade_inicial']}'";
        }

        return $condicao;
    }

    public function verficarCondicao($condicao){
        if (!empty($condicao)) {
            $condicao_final = implode(" and ", $condicao);
            $condicao_final = str_replace("Array", "", $condicao_final);

            $query = DB::table('cidadao_nacional')
                ->whereRaw($condicao_final)
                ->paginate(5);
            return $query;
        } 
    }

}

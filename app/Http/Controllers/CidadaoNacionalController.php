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

    function pesquisarDadosPessoais(Request $request) {
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

        if (!empty($nome)) {
            $condicao[] = "nome = '{$nome}'";
        }

        if (!empty($numero_bi)) {
            $condicao[] = "numero_bi = '{$numero_bi}'";
        }

        if (!empty($naturalidade)) {
            $condicao[] = "naturalidade = '{$naturalidade}'";
        }

        if (!empty($nome_pai)) {
            $condicao[] = "nome_pai = '{$nome_pai}'";
        }

        if (!empty($nome_mae)) {
            $condicao[] = "nome_mae = '{$nome_mae}'";
        }

        if (!empty($sexo)) {
            $condicao[] = "sexo = '{$sexo}'";
        }

        if (!empty($estado_civil)) {
            $condicao[] = "estado_civil = '{$estado_civil}'";
        }

        if (!empty($altura)) {
            $condicao[] = "altura = '{$altura}'";
        }

        if (!empty($residencia)) {
            $condicao[] = "residencia = '{$residencia}'";
        }

        if (!empty($provincia)) {
            $condicao[] = "provincia = '{$provincia}'";
        }

        if (!empty($mes_emissao_terminal) && !empty($ano_emissao_terminal) && !empty($mes_emissao_inicial) && !empty($ano_emissao_inicial)) {
            
            $emissao_inicial_tratado = $ano_emissao_inicial . "-" . $mes_emissao_inicial . "-01";
            
            $emissao_terminal_tratado = $ano_emissao_terminal . "-" . $mes_emissao_terminal . "-31";
            
            $condicao[] = "data_emissao between '{$emissao_inicial_tratado}' and '{$emissao_terminal_tratado}' ";
            
        } else if (!empty($mes_emissao_inicial) && !empty($ano_emissao_inicial)) {
            $condicao[] = "month(data_emissao) = '{$mes_emissao_inicial}' and year(data_emissao) = '{$ano_emissao_inicial}'";
        }

        if (!empty($mes_validade_terminal) && !empty($ano_validade_terminal) && !empty($mes_validade_inicial) && !empty($ano_validade_inicial)) {
            
            $validade_inicial_tratado = $ano_validade_inicial . "-" . $mes_validade_inicial . "-01";
            
            $validade_terminal_tratado = $ano_validade_terminal . "-" . $mes_validade_terminal . "-31";
            
            $condicao[] = "data_validade between '{$validade_inicial_tratado}' and '{$validade_terminal_tratado}' ";
            
        } else if (!empty($mes_validade_inicial) && !empty($ano_validade_inicial)) {
            $condicao[] = "month(data_validade) = '{$mes_validade_inicial}' and year(data_validade) = '{$ano_validade_inicial}'";
        }

        if (!empty($mes_nascimento_terminal) && !empty($ano_nascimento_terminal) && !empty($mes_nascimento_inicial) && !empty($ano_nascimento_inicial)) {
            
            $nascimento_inicial_tratado = $ano_nascimento_inicial . "-" . $mes_nascimento_inicial . "-01";
            
            $nascimento_terminal_tratado = $ano_nascimento_terminal . "-" . $mes_nascimento_terminal . "-31";
            
            $condicao[] = "data_nascimento between '{$nascimento_inicial_tratado}' and '{$nascimento_terminal_tratado}' ";
            
        } else if (!empty($mes_nascimento_inicial) && !empty($ano_nascimento_inicial)) {
            $condicao[] = "month(data_nascimento) = '{$mes_nascimento_inicial}' and year(data_nascimento) = '{$ano_nascimento_inicial}'";
        }

        if (!empty($condicao)) {
        $condicao_final = "where " . implode(" and ", $condicao);
        $condicao_final = str_replace("Array", "", $condicao_final);
        echo $condicao_final;

        $query = DB::select('
                select * from cidadao_nacional ' . $condicao_final);
        $resultado = $query;
        return view('ciadadao_nacional.pesquisa', compact("resultado"));
            
        }else{
            echo "Nenhuma opção selecionada";
        }
    }
}
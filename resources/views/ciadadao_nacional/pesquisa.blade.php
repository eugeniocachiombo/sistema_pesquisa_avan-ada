<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all6.css">
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/jquery/jquery.js"></script>
</head>
<body>
    

<form action="/ciadadao_nacional/pesquisa" method="post">
    @csrf
    <p>Data Inicial</p>
    <label for="mes_inicial">Mês</label> 
    <select name="mes_inicial" id="mes_inicial">
        <option value="01">Janeiro</option>
        <option value="02">Fevereiro</option>
        <option value="03">Março</option>
        <option value="04">Abril</option>
        <option value="05">Maio</option>
        <option value="06">Junho</option>
        <option value="07">Julho</option>
        <option value="08">Agosto</option>
        <option value="09">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
    </select>

    <label for="ano_inicial">Ano</label>
    <select name="ano_inicial" id="ano_inicial">
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select> <br> <br>

    <p>Data Terminal</p>
    <label for="mes_terminal">Mês</label> 
    <select name="mes_terminal" id="mes_terminal">
        <option value="01">Janeiro</option>
        <option value="02">Fevereiro</option>
        <option value="03">Março</option>
        <option value="04">Abril</option>
        <option value="05">Maio</option>
        <option value="06">Junho</option>
        <option value="07">Julho</option>
        <option value="08">Agosto</option>
        <option value="09">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
    </select>

    <label for="ano_terminal">Ano</label>
    <select name="ano_terminal" id="ano_terminal">
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select> <br> <br>

    
    <input type="submit" value="Pesquisar" name="btnPesquisar" id="btnPesquisar">
</form>

@isset($resultado)
    <table>
        <tr>
            <th>Nome</th>
            <th>Número do BI</th>
            <th>Data de Nascimento</th>
            <th>Naturalidade</th>
            <th>Nome do pai</th>
            <th>Nome da mãe</th>
            <th>Data de Emissao</th>
            <th>Data de validade</th>
            <th>Sexo</th>
            <th>Estado civil</th>
            <th>Altura</th>
            <th>Residencia</th>
            <th>Província</th>
        </tr>

        @foreach ($resultado as $item)
        <tr>
           <td>{{$item->nome}}</td>
           <td>{{$item->numero_bi}}</td>
           <td>{{$item->data_nascimento}}</td>
           <td>{{$item->naturalidade}}</td>
           <td>{{$item->nome_pai}}</td>
           <td>{{$item->nome_mae}}</td>
           <td>{{$item->data_emissao}}</td>
           <td>{{$item->data_validade}}</td>
           <td>{{$item->sexo}}</td>
           <td>{{$item->estado_civil}}</td>
           <td>{{$item->altura}}</td>
           <td>{{$item->residencia}}</td>
           <td>{{$item->provincia}}</td>
        </tr>
        @endforeach
    </table>
@endisset



</body>
</html>
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
    

@include('ciadadao_nacional.formularios.dataEmissao');



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
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
    <form action="/cidadao_nacional/pesquisa/dados_pessoais" method="post">
        @include('ciadadao_nacional.formularios.dadosPessoais')
        @include('ciadadao_nacional.formularios.dataEmissao')
        @include('ciadadao_nacional.formularios.dataValidade')
        @include('ciadadao_nacional.formularios.dataNascimento')
        <input type="submit" value="Pesquisar">
    </form>

    @isset($resultado)
        @include('ciadadao_nacional.tabela.tabela');
    @endisset
</body>

</html>

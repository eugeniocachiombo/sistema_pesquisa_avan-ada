<form action="/ciadadao_nacional/pesquisa" method="post">
    @csrf
    <label for="nome">Mês</label> <br>
    <select name="mes" id="mes">
        <option value="01">Janeiro</option>    
        <option value="02">Fervereiro</option>    
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
    </select> <br>
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
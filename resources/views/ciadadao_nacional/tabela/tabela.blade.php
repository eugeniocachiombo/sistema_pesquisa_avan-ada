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

<div class="py-4">
    {{ $resultado->links() }}
</div>
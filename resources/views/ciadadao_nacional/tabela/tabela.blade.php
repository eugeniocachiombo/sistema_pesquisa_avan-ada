

<div class="container pt-2">
    <div class="col-12" style="overflow: auto;">
        <table class="table table-sm table-hover" >
            <thead class="table-dark ">
                <tr class="" >
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Nome</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Nº do BI</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Data de Nascimento</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Naturalidade</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Pai</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Mãe</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Emissao</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Validade</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Sexo</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Estado civil</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Altura</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Residencia</th>
                    <th class="border text-center" style="min-width: 200px; white-space: nowrap">Província</th>
                </tr>
            </thead>
    
            <tbody style="background: crimson; color: yellow">
                @foreach ($resultado as $item)
                    <tr>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->nome }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->numero_bi }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->data_nascimento }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->naturalidade }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->nome_pai }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->nome_mae }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->data_emissao }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->data_validade }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->sexo }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->estado_civil }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->altura }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->residencia }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->provincia }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <div class="py-4">
        {{ $resultado->links() }}
    </div>
</div>



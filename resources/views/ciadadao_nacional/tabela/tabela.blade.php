<div class="container pt-2">
    <div class="col-12" style="overflow: auto;">
        <table class="table table-sm table-hover">
            <thead class="table-dark ">
                <tr class="">
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
                <?php $contador = 0; ?>
                @foreach ($resultado as $item)
                    <tr>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">{{ $item->nome }}
                        </td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->numero_bi }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            <?php
                            $data = explode('-', $item->data_nascimento);
                            $data_tratada = $data[2] . '-' . $data[1] . '-' . $data[0];
                            echo $data_tratada;
                            ?>
                        </td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->naturalidade }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->nome_pai }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->nome_mae }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            <?php
                            $data = explode('-', $item->data_emissao);
                            $data_tratada = $data[2] . '-' . $data[1] . '-' . $data[0];
                            echo $data_tratada;
                            ?>
                        </td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            <?php
                            $data = explode('-', $item->data_validade);
                            $data_tratada = $data[2] . '-' . $data[1] . '-' . $data[0];
                            echo $data_tratada;
                            ?>
                        </td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            @if ($item->sexo == 'M')
                                Masculino
                            @else
                                Femenino
                            @endif
                        </td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ Str::ucfirst($item->estado_civil) }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->altura }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->residencia }}</td>
                        <td class="border text-center" style="min-width: 200px; white-space: nowrap">
                            {{ $item->provincia }}</td>
                        <?php $contador++; ?>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($contador == 0)
            <h4 class="text-center p-2 " style="background: crimson; color: white">Nenhuma informação encontrada</h4>
        @endif

        {{ $resultado->links() }}

    </div>
</div>

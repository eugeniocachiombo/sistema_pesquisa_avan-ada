<div class="container" style="">
    <div class="row">
        @csrf
        <div class="col-6">
            <p><b>Data Inicial</b> <hr></p>
            <label for="mes_validade_inicial">Mês</label> <br>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="mes_validade_inicial" id="mes_validade_inicial">
                    <option value="">Selecione...</option>
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
                </select> <i class="fas fa-chevron-circle-down"
                style="color: white; position: relative; left: -32px;"></i>
            </div>

            <label for="ano_validade_inicial">Ano</label> <br>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="ano_validade_inicial" id="ano_validade_inicial">
                    <option value="">Selecione...</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>  <i class="fas fa-chevron-circle-down"
                style="color: white; position: relative; left: -32px;"></i>
            </div>
        </div>

        <div class="col">
            <p><b>Data Terminal</b> <hr></p>
            <label for="mes_validade_terminal">Mês</label>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="mes_validade_terminal" id="mes_validade_terminal">
                    <option value="">Selecione...</option>
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
                </select> <i class="fas fa-chevron-circle-down"
                style="color: white; position: relative; left: -32px;"></i>
            </div>

            <label for="ano_validade_terminal">Ano</label>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="ano_validade_terminal" id="ano_validade_terminal">
                    <option value="">Selecione...</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select><i class="fas fa-chevron-circle-down"
                style="color: white; position: relative; left: -32px;"></i>
            </div>
        </div>
    </div>

</div>

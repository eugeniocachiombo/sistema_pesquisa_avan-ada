<form action="/ciadadao_nacional/pesquisa" method="post">
    <h3>Pesquisar por data de emissão</h3>
    @csrf
    <p>Data Inicial</p>
    <label for="mes_inicial_emissao">Mês</label> 
    <select name="mes_inicial_emissao" id="mes_inicial_emissao">
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
    </select>

    <label for="ano_inicial_emissao">Ano</label>
    <select name="ano_inicial_emissao" id="ano_inicial_emissao">
        <option value="">Selecione...</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select> <br> <br>

    <p>Data Terminal</p>
    <label for="mes_terminal_emissao">Mês</label> 
    <select name="mes_terminal_emissao" id="mes_terminal_emissao">
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
    </select>

    <label for="ano_terminal_emissao">Ano</label>
    <select name="ano_terminal_emissao" id="ano_terminal_emissao">
        <option value="">Selecione...</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
    </select> <br> <br>

    
    <input type="submit" value="Pesquisar" name="btnPesquisar" id="btnPesquisar">
</form>
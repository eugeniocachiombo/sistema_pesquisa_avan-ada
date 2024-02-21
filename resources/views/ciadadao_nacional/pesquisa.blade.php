<title>Página de Pesquisa</title>
@include('ciadadao_nacional.inclusao.cabecalho');
<main>
    <form class="" action="/cidadao_nacional/pesquisa/dados_pessoais" method="post">
        <div class="container">
            <h3>Formulário de pesquisa</h3>
            <div class="accordion accordion-flush border" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <b>Informações Pessoais</b>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            @include('ciadadao_nacional.formularios.dadosPessoais')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <b>Data de Nascimento</b>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            @include('ciadadao_nacional.formularios.dataNascimento')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <b>Data de emissão</b>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            @include('ciadadao_nacional.formularios.dataEmissao')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFor">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFor" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <b>Data de validade</b>
                        </button>
                    </h2>
                    <div id="flush-collapseFor" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            @include('ciadadao_nacional.formularios.dataValidade')
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" value="Pesquisar">
        </div>
    </form>

    @isset($resultado)
        @include('ciadadao_nacional.tabela.tabela')
    @endisset
</main>

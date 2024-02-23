<div class="container" style="">
    @csrf
    <div class="row g-3">
        <div class="col-6">
            <label for="nome">Nome do Cidadão </label> <br>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>

        <div class="col-6">
            <label for="numero_bi">Número do BI</label> <br>
            <input class="form-control" type="text" name="numero_bi" id="numero_bi">
        </div>

        <dvi class="col-6">
            <label for="naturalidade">Naturalidade</label> <br>
            <input class="form-control" type="text" name="naturalidade" id="naturalidade">
        </dvi>

        <div class="col-6">
            <label for="nome_pai">Nome do Pai</label> <br>
            <input class="form-control" type="text" name="nome_pai" id="nome_pai">

        </div>

        <div class="col-6">
            <label for="nome_mae">Nome da mãe</label> <br>
            <input class="form-control" type="text" name="nome_mae" id="nome_mae">
        </div>

        <div class="col-6 ">
            <label for="">Sexo</label> <br>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="sexo" id="sexo">
                    <option value="">Selecione...</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select> <i class="fas fa-chevron-circle-down"
                    style="color: white; position: relative; left: -32px;"></i>
            </div>
        </div>

        <div class="col-6">
            <label for="">Estado civil</label> <br>
            <div class="col-12 d-flex align-items-center" style="min-width: inherit">
                <select class="form-control select" name="estado_civil" id="estado_civil">
                    <option value="">Selecione...</option>
                    <option value="solteiro(a)">Solteiro(a)</option>
                    <option value="casado(a)">Casado(a)</option>
                </select> <i class="fas fa-chevron-circle-down"
                    style="color: white; position: relative; left: -32px;"></i>
            </div>
        </div>

        <div class="col-6">
            <label for="">Altura</label> <br>
            <input class="form-control" type="text" name="altura" id="altura">
        </div>

        <div class="col-6">
            <label for="">Residência</label> <br>
            <input class="form-control" type="text" name="residencia" id="residencia">
        </div>

        <div class="col-6">
            <label for="">Província</label> <br>
            <input class="form-control" type="text" name="provincia" id="provincia">
        </div>
    </div>
</div>

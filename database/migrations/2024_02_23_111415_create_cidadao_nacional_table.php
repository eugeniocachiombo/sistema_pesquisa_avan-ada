<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadaoNacionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadao_nacional', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->integer("numero_bi");
            $table->date("data_nascimento");
            $table->string("naturalidade");
            $table->string("nome_pai");
            $table->string("nome_mae");
            $table->date("data_emissao");
            $table->date("data_validade");
            $table->enum('sexo', ['M', 'F']);
            $table->string("estado_civil");
            $table->decimal('altura', 3, 2);
            $table->string("residencia");
            $table->string("provincia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidadao_nacional');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadaoNacional extends Model
{
    use HasFactory;
    protected $table = "cidadao_nacional";
    protected $fillable = [
        'id',
        'nome',
        'numero_bi',
        'data_nascimento',
        'naturalidade',
        'nome_pai',
        'nome_mae',
        'data_emissao',
        'data_validade ',
        'sexo',
        'estado_civil',
        'altura',
        'residencia',
        'provincia'
    ];
}

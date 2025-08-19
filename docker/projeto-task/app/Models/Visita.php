<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'e_mail',
        'telefone',
        'empresa',
        'site_linkedin',
        'cidade_de_origem',
        'pais_de_origem',
        'data_da_visita',
        'cargo',
        'segmento',
        'descricao_do_grupo',
        'informacao_extra',
        'objetivo_da_visita',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = [
        'nome', 'endereco', 'horario_inicial','horario_final','dias_funcionamento','media_nota','classe','id_filial',
    ];
}

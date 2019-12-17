<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'conteudo','nota','id_estabelecimento','id_usuario',
    ];
}

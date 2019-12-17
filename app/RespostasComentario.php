<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespostasComentario extends Model
{
    protected $fillable = [
        'conteudo','id_estabelecimento','id_usuario','id_comentario',
    ];
}

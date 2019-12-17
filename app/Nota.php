<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'id_comentario','nota','id_estabelecimento','id_usuario',
    ];
}

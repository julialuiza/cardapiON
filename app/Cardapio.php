<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = [
        'id_estabelecimento', 'id_usuario', 'foto_cardapio',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardapioProdutoItem extends Model
{

    protected $table = 'cardapio_grupo_item';

    protected $fillable = [

        'id_cardapio_grupo',
        'nome',
        'valor',

    ];
    public function  getValorAttribute($valor)
    {
        return floatval($valor);
    }
    //
}

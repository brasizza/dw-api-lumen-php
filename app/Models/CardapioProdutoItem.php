<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class CardapioProdutoItem extends Model
{

    protected $table = 'cardapio_grupo_item';


    protected $fillable = [

        'id_cardapio_grupo',
        'name',
        'price',

    ];
}

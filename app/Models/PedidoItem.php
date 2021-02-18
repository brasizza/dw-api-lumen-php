<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    protected $table = 'pedido_item';

    protected $fillable = [

        'id_pedido',
        'id_cardapio_grupo_item'
    ];


    public function item(){
        return $this->belongsTo(CardapioProdutoItem::class,'id');
    }
}

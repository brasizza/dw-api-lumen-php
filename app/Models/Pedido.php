<?php

namespace App\Models;

use App\Http\Controllers\PedidoItemController;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = [


        'id_usuario',
        'forma_pagamento',
        'endereco_entrega'
    ];

    public function items(){

        return $this->hasMany(PedidoItem::class,'id_pedido');
    }
}

<?php

namespace App\Repositories;
use App\Models\Pedido;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use InvalidArgumentException;

/** @package App\Repositories */
class PedidoRepository
{
    use ApiResponser;


    /**
     * @param Request $dados
     * @return Pedido
     * @throws \Exception
     */
    public function order(Request $dados){
        $pedido = new Pedido([
            'id_usuario' => $dados->userId,
            'endereco_entrega'=> $dados->address,
            'forma_pagamento'=> $dados->paymentType
        ]);
            $pedido->save();
      return $pedido;

    }


    /**
     * @param mixed $idUsuario
     * @return Collection<mixed, Builder>
     * @throws InvalidArgumentException
     */
    public function findOrderById($idUsuario){
        return Pedido::with(['items' => function($query){
            $query->with('item');
        }])->where('id_usuario', $idUsuario)->get();

    }
}

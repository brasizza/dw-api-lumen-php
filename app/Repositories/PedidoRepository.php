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
        return $this->processData(Pedido::with(['items' => function($query){
            $query->with('item');
        }])->where('id_usuario', $idUsuario)->get());

    }

    public function processData($orders){
        $newArray = [];
        foreach($orders as $idxO => $order){
            $newArray[$idxO] = [

                'id'=> $order['id'],
                'paymentType'=> $order['forma_pagamento'],
                'address'=> $order['endereco_entrega'],
            ];


        $items  = array();

        foreach($order['items'] as $idxI => $item){

            $items[$idxI] = [
                'id' =>  $item['id'],
                'item' => $item['item']
            ];
        }
        $newArray[$idxO]['items'] = $items;

    }
        return $newArray;
    }
}

<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Traits\ApiResponser;

/** @package App\Repositories */
class PedidoItemRepository
{
    use ApiResponser;


    /**
     * @param Pedido $pedido
     * @param mixed $items
     * @return mixed
     * @throws \Exception
     */
    public function add(Pedido $pedido, $items)
    {
        $inserts = array();
        foreach ($items as $item) {

            $inserts[] = [

                'id_pedido' => $pedido['id'],
                'id_cardapio_grupo_item' => $item
            ];
        }
        return  PedidoItem::insert($inserts);
    }
}

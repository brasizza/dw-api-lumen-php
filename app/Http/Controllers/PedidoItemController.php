<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Repositories\PedidoItemRepository;

/** @package App\Http\Controllers */
class PedidoItemController extends Controller
{

    protected $repository;
    /**
     * @param PedidoItemRepository $repository
     * @return void
     */
    public function __construct(PedidoItemRepository $repository)
    {
        $this->repository = $repository;
    }



    /**
     * @param Pedido $pedido
     * @param mixed $items
     * @return mixed
     * @throws \Exception
     */
    public function add(Pedido $pedido, $items){

      return   $this->repository->add($pedido,$items);
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\PedidoItemRepository;
use App\Repositories\PedidoRepository;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/** @package App\Http\Controllers */
class PedidoController extends Controller
{
    use ApiResponser;
    protected $repository;
    /**
     * @param PedidoRepository $repository
     * @return void
     */
    public function __construct(PedidoRepository $repository)
    {
        $this->repository = $repository;

    }


    /**
     * @param Request $request
     * @return App\Traits\Illuminate\Http\JsonResponse
     */
    public function order(Request $request){

        try{
           $pedido =  $this->repository->order($request);
           $pedidoItemRepository = new PedidoItemRepository();
           $pedidoItemRepository->add($pedido,$request->itemsId);
           return $this->successResponse("Pedido enviado!");
        }catch(Exception $e){
            dd($e);
            return $this->errorResponse('Falha ao inserir o pedido', Response::HTTP_NOT_ACCEPTABLE);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\CardapioRepository;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Http\Response;

/** @package App\Http\Controllers */
class CardapioController extends Controller
{
    use ApiResponser;
    protected $repository;
    /**
     * @param CardapioRepository $repository
     * @return void
     */
    public function __construct(CardapioRepository $repository)
    {
        $this->repository = $repository;
    }


    /** @return App\Traits\Illuminate\Http\JsonResponse  */
    public function findAll()
    {
        try{
        return $this->successResponse($this->repository->findAll());
        }catch(Exception $e){


            return $this->errorResponse('Falha ao recuperar o menu ' , Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

/** @package App\Http\Controllers */
class UserController extends Controller
{

    use ApiResponser;
    private $repository;
    /**
     * @param UserRepository $repository
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return App\Traits\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $resultRepository = $this->repository->login($request->only(['email',  'password']));
        if ($resultRepository !== false) {
            return $resultRepository;
        } else {
            return $this->errorResponse('Usuário não encontrado', Response::HTTP_NOT_FOUND);
        }
    }



    /**
     * @param Request $request
     * @return App\Traits\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|unique:users|email|max:255',
                'name' => 'required|min:3',
            ],
            $this->validate_message
        );

        if ($validator->fails()) {
            return $this->errorResponse($validator->errors(), Response::HTTP_NOT_ACCEPTABLE);
        }
        try {
            $user  = $this->repository->create($request->all());
        } catch (\Exception $e) {

            return $this->errorResponse('Falha ao gravar o usuário', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return  $this->successResponse($user);
    }


    /**
     * @param mixed $id
     * @return App\Traits\Illuminate\Http\JsonResponse
     */
    public function findOrders($id)
    {
        try {
            return $this->successResponse($this->repository->findMyOrders($id));
        } catch (\Exception $e) {

            dd($e);
            return $this->errorResponse("Falha ao recuperar meus pedidos", Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

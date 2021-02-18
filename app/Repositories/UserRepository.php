<?php

namespace App\Repositories;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

/** @package App\Repositories */
class UserRepository
{
    use ApiResponser;
    /**
     * @param mixed $dadosUsuario
     * @return false|App\Traits\Illuminate\Http\JsonResponse
     */
    public function login($dadosUsuario)
    {
        $user = $this->findUserByEmail($dadosUsuario['email']);
        if (!$user) {
            return false;
        }
        if (!Hash::check($dadosUsuario['password'], $user->password)) {
            return false;
        }
        return $this->successResponse($user);
    }


    /**
     * @param mixed $email
     * @return mixed
     */
    public function findUserByEmail($email){

        return User::where('email', '=', $email)->first();
    }


    /**
     * @param mixed $id
     * @return mixed
     */
    public function findById($id){
        return User::findOrFail($id);
    }


    /**
     * @param mixed $dados
     * @return User
     * @throws \Exception
     */
    public function create($dados)
    {
        $user = new User();
        $user->password = ($dados['password']);
        $user->email = $dados['email'];
        $user->name = $dados['name'];
        $user->save();
        return $user;
    }


    /**
     * @param mixed $idUsuario
     * @return Collection<mixed, Builder>
     * @throws \Exception
     */
    public  function findMyOrders($idUsuario){
        $pedidoRepository = new PedidoRepository();

        $pedido = $pedidoRepository->findOrderById($idUsuario);

        return $pedido;
    }
}

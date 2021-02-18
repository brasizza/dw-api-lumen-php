<?php

namespace App\Repositories;

use App\Models\CardapioGrupo;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

/** @package App\Repositories */
class CardapioRepository
{
    use ApiResponser;


    /** @return Collection<mixed, Builder>  */
    public function findAll(){
        return CardapioGrupo::with('items')->get();

    }
}

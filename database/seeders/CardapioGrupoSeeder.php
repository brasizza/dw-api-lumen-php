<?php

namespace Database\Seeders;

use App\Models\CardapioGrupo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardapioGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard(true);
        DB::table('cardapio_grupo')->truncate();


        CardapioGrupo::create(['nome_grupo' => 'Pizzas Salgadas']);
        CardapioGrupo::create(['nome_grupo' => 'Pizzas Doces']);

        Model::unguard(false);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CardapioProdutoItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CardapioProdutoItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Mussarela",
            'valor' => 35
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Calabreza",
            'valor' => 30
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Quatro Queijos",
            'valor' => 45
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Napolitada",
            'valor' => 32.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Marguerita",
            'valor' => 36.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'nome' => "Portuguesa",
            'valor' => 49.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'nome' => "Brigadeiro",
            'valor' => 49.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'nome' => "Banana",
            'valor' => 30.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'nome' => "Goiabada",
            'valor' => 50
        ]);

        Model::unguard(false);
    }
}

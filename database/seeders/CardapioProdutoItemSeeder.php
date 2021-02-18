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
            'name' => "Mussarela",
            'price' => 35
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'name' => "Calabreza",
            'price' => 30
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'name' => "Quatro Queijos",
            'price' => 45
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'name' => "Napolitada",
            'price' => 32.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'name' => "Marguerita",
            'price' => 36.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 1,
            'name' => "Portuguesa",
            'price' => 49.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'name' => "Brigadeiro",
            'price' => 49.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'name' => "Banana",
            'price' => 30.9
        ]);

        CardapioProdutoItem::create([
            'id_cardapio_grupo' => 2,
            'name' => "Goiabada",
            'price' => 50
        ]);

        Model::unguard(false);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardapioGrupoItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapio_grupo_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cardapio_grupo')->references('id')->on('cardapio_grupo');
            $table->index('id_cardapio_grupo');
            $table->string('name');
            $table->decimal('price', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapio_grupo_item');
    }
}

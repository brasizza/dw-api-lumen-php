<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardapioGrupo extends Model{

    protected $table = 'cardapio_grupo';

    protected $fillable = [

        'nome_grupo'
    ];


    public function items(){

        return $this->hasMany(CardapioProdutoItem::class,'id_cardapio_grupo');
    }

}

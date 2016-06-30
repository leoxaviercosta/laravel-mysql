<?php

namespace Modules\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['cod_pro', 'nome_pro', 'estoque_pro', 'custo_pro', 'venda_pro'];
    protected $table = 'produto';
    protected $primaryKey = 'cod_itens';
}

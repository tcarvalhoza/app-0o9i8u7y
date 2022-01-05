<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    const TIPO_REMOVER = "RM";
    const TIPO_ADICIONAR = "ADD";
    
    protected $table = 'movimentacoes';
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    
    use HasFactory;
    
    public function produto() {
        return $this->belongsTo(Produto::class);
    }
    
}

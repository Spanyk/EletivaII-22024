<?php

namespace App\Models;

use App\Models\Morador;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
    use HasFactory;
    // Define os atributos de um modelo podem ser preenchidos em massa 
    // Operações de criação e atualização em massa, como no create() ou update()
    protected $fillable = [
        'morador_id',
        'localizacao',
        'tamanho',
    ];

    public function morador() {
        return $this->belongsTo(Morador::class);
    }
}

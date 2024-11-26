<?php

namespace App\Models;
use App\Models\Planta; 
use App\Models\Terreno; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'localizacao',
        'tamanho',
        'dispobibilidade'
    ];

    public function terrenos()
    {
        return $this->hasMany(Terreno::class);
    }

    public function plantas()
    {
        return $this->belongsToMany(Planta::class, 'plantio_morador')
            ->withPivot('quantidade', 'status')
            ->withTimestamps();
    }
}

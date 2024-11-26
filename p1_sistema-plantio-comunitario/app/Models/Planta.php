<?php

namespace App\Models;
use App\Models\Morador; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'localizacao',
        'tamanho',
        'dispobibilidade'
    ];

    public function moradores()
{
    return $this->belongsToMany(Morador::class, 'plantio_morador')
                ->withPivot('quantidade', 'status')
                ->withTimestamps();
}
}

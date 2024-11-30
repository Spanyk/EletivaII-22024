<?php

namespace App\Models;

use App\Models\Morador;
use App\Models\Planta;
use App\Models\Terreno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantio extends Model
{
    use HasFactory;

    protected $fillable = [
        'morador_id',
        'planta_id',
        'terreno_id',
        'data_plantio',
        'data_colheita',
        'status'
    ];

    public function moradors() {
        return $this->belongsTo(Morador::class);
    }

    public function terreno() {
        return $this->belongsTo(Terreno::class);
    }
    public function planta() {
        return $this->belongsTo(Planta::class);
    }
}

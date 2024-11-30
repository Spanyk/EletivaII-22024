<?php

namespace App\Models;

use App\Models\User; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'telefone',
        'endereco',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}

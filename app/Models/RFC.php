<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFC extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'n_actividad',
        'ambiente',
        'rfc_id',
        'equipo',
        'descripcion',
        'resultado_esperado',
        'duracion',
        'observaciones',
        'afecta_disponibilidad',
    ];
}

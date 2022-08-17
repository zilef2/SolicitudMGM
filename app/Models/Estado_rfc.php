<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_rfc extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
}

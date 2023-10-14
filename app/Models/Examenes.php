<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{
    protected $fillable = [
        'discord_id',
        'nombre',
        'datos',
        'primera_pregunta',
        'segunda_pregunta',
        'tercera_pregunta',
        'cuarta_pregunta',
        'fecha',
    ];
}

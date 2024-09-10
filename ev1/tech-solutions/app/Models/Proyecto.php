<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto',
    ];


    protected $casts = [
        'fecha_inicio' => 'datetime', // Asegura que 'fecha_inicio' sea tratado como una instancia de Carbon y evitar problemas en edit.blade
    ];
}

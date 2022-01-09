<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'logo',
        'telefono1',
        'telefono2',
        'telefono3',
        'pais_ciudad',
        'direccion',
        'propietario',
        'facebook',
        'whatsapp',
        'instagram',
        'correo',
        'dias',
        'horas',
        'ruc',
        'banco',
        'tipo_cuenta',
        'numero_cuenta',
        'nombre_cuenta',       
        'url',
        'nota',
    ];
}

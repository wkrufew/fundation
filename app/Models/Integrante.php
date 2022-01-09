<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cargo',
        'foto',
        'url',
    ];
}

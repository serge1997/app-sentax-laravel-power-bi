<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;

    protected $table = "relatorios";
    protected $fillable = [
        'pb1um',
        'pbdois',
        'pbitres',
        'usuario_id',
    ];
}

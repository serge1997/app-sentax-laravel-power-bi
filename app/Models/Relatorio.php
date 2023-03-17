<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;

    protected $table = "relatorios";
    protected $fillable = [
        'kimberly',
        'quimicos',
        'rubbermaid',
        'outros',
        'estoque',
        'usuario_id',
    ];
}

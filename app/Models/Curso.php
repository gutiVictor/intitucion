<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // Definir la tabla asociada al modelo
    protected $table = 'cursos';

    // Definir los campos que puedes llenar masivamente
    protected $fillable = ['curso'];

    
    
}

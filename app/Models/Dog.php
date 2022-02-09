<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    // Para poder usar el DogsFactory
    use HasFactory;

    protected $table = 'dogs';
    protected $fillable = ["nombre", "raza", "isVacunado", "fecha_nacimiento", "edad", "price", "tamanyo", "descripcion"];

    public $incrementing = true;
    protected $primaryKey = 'id';
}

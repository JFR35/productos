<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_producto', 'descripcions', 'precio', 'id_categoria'];

    // 1 Producto pertenece a 1 categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

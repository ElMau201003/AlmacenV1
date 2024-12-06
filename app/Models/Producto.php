<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = 'idProducto';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['nombreProducto', 'marcaProducto', 'loteProducto', 'cantidadTotalProducto'];

    public function institucionProductos() {
        return $this->hasMany(InstitucionProducto::class);
    }
}

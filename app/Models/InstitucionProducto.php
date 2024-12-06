<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionProducto extends Model
{
    use HasFactory;

    protected $table = 'institucionproducto';

    protected $primaryKey = 'idInstitucionProducto';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['idInstitucion', 'idProducto'];

    public function institucion() {
        return $this->belongsTo(Institucion::class, 'idInstitucion');
    }

    public function producto() {
        return $this->belongsTo(Producto::class, 'idProducto');
    }
}

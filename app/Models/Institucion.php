<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'institucion';

    protected $primaryKey = 'idInstitucion';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['codigoInstitucion', 'nombreInstitucion', 'direccionInstitucion', 'localidadInstitucion', 'provinciaInstitucion', 'departamentoInstitucion'];

    public function institucionRutas() {
        return $this->hasMany(InstitucionRuta::class);
    }

    public function institucionProductos() {
        return $this->hasMany(InstitucionProducto::class);
    }

    public function caes() {
        return $this->hasMany(CAEInstitucion::class);
    }
}

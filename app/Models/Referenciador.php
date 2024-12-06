<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referenciador extends Model
{
    use HasFactory;

    protected $table = 'referenciador';

    protected $primaryKey = 'idReferenciador';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['nombresReferenciador', 'apellidopReferenciador', 'apellidomReferenciador', 'telefonoReferenciador', 'carnetsanidadReferenciador'];

    public function rutas() {
        return $this->hasMany(Ruta::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;

    protected $table = 'ruta';

    protected $primaryKey = 'idRuta';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['fechaRuta', 'idVehiculo', 'idConductor', 'idReferenciador'];

    public function vehiculo() {
        return $this->belongsTo(Vehiculo::class, 'idVehiculo');
    }

    public function conductor() {
        return $this->belongsTo(Conductor::class, 'idConductor');
    }

    public function referenciador() {
        return $this->belongsTo(Referenciador::class, 'idReferenciador');
    }

    public function institucionRutas() {
        return $this->hasMany(InstitucionRuta::class);
    }
}

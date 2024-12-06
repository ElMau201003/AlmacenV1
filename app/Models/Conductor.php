<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $table = 'conductor';

    protected $primaryKey = 'idConductor';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['nombresConductor', 'apellidopConductor', 'apellidomConductor', 'telefonoConductor', 'licenciaConductor'];

    public function rutas() {
        return $this->hasMany(Ruta::class);
    }
}

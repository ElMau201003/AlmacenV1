<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CAE extends Model
{
    use HasFactory;

    protected $table = 'cae';

    protected $primaryKey = 'idCAE';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['dniCAE', 'nombresCAE', 'apellidopCAE', 'apellidomCAE', 'telefonoCAE', 'cargoCAE'];

    public function instituciones() {
        return $this->hasMany(CAEInstitucion::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionRuta extends Model
{
    use HasFactory;

    protected $table = 'institucionruta';

    protected $primaryKey = 'idInstitucionRuta';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['idInstitucion', 'idRuta'];

    public function institucion() {
        return $this->belongsTo(Institucion::class, 'idInstitucion');
    }

    public function ruta() {
        return $this->belongsTo(Ruta::class, 'idRuta');
    }
}

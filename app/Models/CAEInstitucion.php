<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CAEInstitucion extends Model
{
    use HasFactory;

    protected $table = 'caeinstitucion';

    protected $primaryKey = 'idCAEInstitucion';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['idCAE', 'idInstitucion'];

    public function cae() {
        return $this->belongsTo(CAE::class, 'idCAE');
    }

    public function institucion() {
        return $this->belongsTo(Institucion::class, 'idInstitucion');
    }
}

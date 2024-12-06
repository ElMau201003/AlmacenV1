<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function index() {

        $instituciones = Institucion::all();
        return $instituciones;

        return view('instituciones.index', compact('instituciones'));
    }

    public function create() {
        return view('instituciones.create');
    }

    public function show($codigoi) {
        return view('instituciones.show', compact('codigoi'));
    }
}

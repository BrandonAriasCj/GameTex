<?php

namespace App\Http\Controllers;

use App\Models\juegosDModel;
use App\Models\torneoModel;
use Illuminate\Http\Request;

class TorneosController extends Controller
{
    public function index()
    {
        $torneos = torneoModel::all(); // Obtén todos los torneos de la base de datos
        return view('torneos.index', compact('torneos')); // Envía los datos a la vista
    }
}

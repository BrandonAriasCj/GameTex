<?php

namespace App\Http\Controllers;

use App\Models\torneoModel;
use Illuminate\Http\Request;

class index extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.users');
    }
    public function index()
    {
        $torneos = torneoModel::all(); // Obtén todos los torneos de la base de datos
        return view('home.index', compact('torneos')); // Envía los datos a la vista
    }
}

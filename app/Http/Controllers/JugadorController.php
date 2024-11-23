<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        return view('jugador.index');
    }

    public function descripcion()
    {
        return view('jugador.descripcion');
    }

    public function partidas()
    {
        return view('jugador.partidas');
    }

    public function ranking()
    {
        return view('jugador.ranking');
    }

    public function reglas()
    {
        return view('jugador.reglas');
    }

}


<?php
namespace App\Http\Controllers;
use App\Models\torneoModel;

use Illuminate\Http\Request;

class JugadorController extends Controller
{

    public function index()
    {
        return view('jugador.index');
    }

    public function descripcion($id = 2)
    {
        $torneo = torneoModel::findOrFail($id);
        return view('jugador.descripcion', compact('torneo'));
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


<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\eventosModel;
use App\Models\ModerModel;
use App\Models\eventosTipoModel;

class AdminDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:50',
            'categoria' => 'required|string|max:20',
            'descripcion' => 'required|string',
            'fecha_fin' => 'required|date',
        ]);

        eventosModel::create($validatedData);
        return redirect()->back()->with('success', 'Datos guardados correctamente');
    }

    public function eventos()
    {
        $items = eventosModel::with(['eventosTipo', 'moderador'])->paginate(4);
        $moderadores = ModerModel::all();
        $eventosTipos = eventosTipoModel::all();

        return view('/admin/dinamicas/eventos', compact('items', 'moderadores', 'eventosTipos'));
    }

    public function storeEventos(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'categoria' => 'required|string',
            'reglas' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'evento_tipo_nombre' => 'required|string|max:50',
            'moderador_id' => 'required|exists:moderadores,id',
        ]);
    
        $eventoTipo = eventosTipoModel::create([
            'nombre' => $validatedData['evento_tipo_nombre'],
            'descripcion' => $validatedData['descripcion'],
            'categoria' => $validatedData['categoria'],
            'reglas' => $validatedData['reglas'],
        ]);
    
        eventosModel::create([
            'nombre' => $validatedData['nombre'],
            'fecha_inicio' => $validatedData['fecha_inicio'],
            'fecha_fin' => $validatedData['fecha_fin'],
            'evento_tipo_id' => $eventoTipo->id,
            'moderador_id' => $validatedData['moderador_id'],
        ]);
    
        return redirect()->route('admin.dinamicas.eventos')->with('exito', 'Evento agregado');
    }
    

    public function showEventos($id)
    {
        $evento = eventosModel::findOrFail($id);
        return view('admin.dinamicas.edit', compact('evento'));
    }

    public function deleteEventos($id)
    {
        $evento = eventosModel::findOrFail($id);
        $evento->delete();

        return redirect()->route('admin.dinamicas.eventos')->with('exit', 'Evento eliminado');
    }

    public function editEventos($id)
    {
        $evento = eventosModel::findOrFail($id);
        $moderadores = ModerModel::all();

        return view('admin.dinamicas.eventos-edit', compact('evento', 'moderadores'));
    }

    public function updateEventos(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'moderador_id' => 'required|exists:moderadores,id',
            'evento_tipo_nombre' => 'required|string|max:50',
            'descripcion_tipo' => 'required|string',
            'categoria_tipo' => 'required|string',
            'reglas_tipo' => 'required|string|max:255',
        ]);

        $evento = eventosModel::findOrFail($id);
        

        $evento->eventosTipo->update([
            'nombre' => $validatedData['evento_tipo_nombre'],
            'descripcion' => $validatedData['descripcion_tipo'],
            'categoria' => $validatedData['categoria_tipo'],
            'reglas' => $validatedData['reglas_tipo'],
        ]);

    
        $evento->update([
            'nombre' => $validatedData['nombre'],
            'fecha_inicio' => $validatedData['fecha_inicio'],
            'fecha_fin' => $validatedData['fecha_fin'],
            'moderador_id' => $validatedData['moderador_id'],
        ]);

        return redirect()->route('admin.dinamicas.eventos')->with('success', 'Evento actualizado');
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////
    public function torneos()
    {
        return view('/admin/dinamicas/torneos');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    public function recompensas()
    {
        return view('/admin/dinamicas/recompensas');
    }


}

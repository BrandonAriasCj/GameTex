<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\eventosModel;
use App\Models\ModerModel;
use App\Models\eventosTipoModel;
use App\Models\juegosDModel;
use App\Models\noticiasModel;
use App\Models\noticiasTematicaModel;
use App\Models\torneoModel;
use App\Models\torneoJuegosModel;
use Illuminate\Support\Facades\Log;

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
/////////////////////////////////////////////////////////////////////////////////////////////
    public function eventos(Request $request)
    {
        $search = $request->input('search');
        $searchType = $request->input('search_type');
        $items = eventosModel::search($search, $searchType)->paginate(4);
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
        eventosModel::store($validatedData);
        return redirect()->route('admin.dinamicas.eventos');
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
        $evento = eventosModel::find($id);
        $moderadores = ModerModel::all();

        return view('admin.dinamicas.eventos-edit', compact('evento', 'moderadores'));
    }

    public function updateEventos(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'moderador_id' => 'required|exists:moderadores,id',
            'evento_tipo_nombre' => 'required|string|max:50',
            'descripcion_tipo' => 'required|string',
            'categoria_tipo' => 'required|string',
            'reglas_tipo' => 'required|string|max:255',
        ]);
        eventosModel::updateEvent($id, $validatedData);
        return redirect()->route('admin.dinamicas.eventos')->with('success', 'Evento actualizado');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    public function torneos(Request $request)
    {
        $search = $request->input('search');
        $searchType = $request->input('search_type');

        $torneos = torneoModel::search($search, $searchType)->paginate(4);
        
        $juegos = juegosDModel::all();
        $eventosTipos = eventosTipoModel::all();
        $moderadores = ModerModel::all();
        $administradores = AdminModel::all();
        return view('/admin/dinamicas/torneos', compact('torneos', 'juegos', 'eventosTipos', 'moderadores', 'administradores'));
    }

    
    public function storeTorneos(Request $request)
    {
        $validatedData = $request->validate([
            'nombrej' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'exp' => 'required|string',
            'juego_id' => 'required|exists:juegos_diccionary,id',
            'evento_tipo_id' => 'required|exists:eventos_tipo,id',
            'moderador_id' => 'required|exists:moderadores,id',
        ]);

        $administrador = Auth::guard('admin')->user();
        torneoModel::store($validatedData, $administrador);
        return redirect()->route('admin.dinamicas.torneos')->with('success', 'Torneo agregado');
    }

    public function editTorneos($id)
    {
        $torneo = torneoModel::findOrFail($id);
        $juegos = torneoJuegosModel::all();
        $eventosTipos = eventosTipoModel::all();
        $moderadores = ModerModel::all();
        $administradores = AdminModel::all();

        return view('admin.dinamicas.torneos-edit', compact('torneo', 'juegos', 'eventosTipos', 'moderadores', 'administradores'));
    }

    
    public function updateTorneos(Request $request, $id)
    {
            $validatedData = $request->validate([
                'nombrej' => 'required|string',
                'creador' => 'required|string',
                'fecha_inicio' => 'required|date',
                'fecha_fin' => 'required|date',
                'exp' => 'required|string',
                'torneo_juego_id' => 'required|exists:torneos_juegos,id',
                'evento_tipo_id' => 'required|exists:eventos_tipo,id',
                'moderador_id' => 'required|exists:moderadores,id',
                'administrador_id' => 'required|exists:administradores,id',
            ]);
    
            $torneo = torneoModel::findOrFail($id);
            $torneo->update($validatedData);
    
            return redirect()->route('admin.dinamicas.torneos')->with('success', 'Torneo actualizado');
    }

    public function showTorneo($id)
    {
        $torneo = torneoModel::with(['juego', 'eventoTipo', 'moderador', 'administrador'])->findOrFail($id);

        return view('admin.dinamicas.showTorneo', compact('torneo'));
    }

        
    
    public function destroyTorneos($id)
    {
            $torneo = torneoModel::findOrFail($id);
            $torneo->delete();
    
            return redirect()->route('admin.dinamicas.torneos')->with('success', 'Torneo eliminado');
    }
    
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    public function recompensas(){
        return view('admin.dinamicas.recompensas');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////// TODO DE NOTICIAS /////////////////////////////////
    public function noticias(Request $request)
    {
        $search = $request->input('search');
        $searchType = $request->input('search_type');


        $noticias = noticiasModel::search($search, $searchType);
        $administradores = AdminModel::all();
        $tematicas = noticiasTematicaModel::all();

        return view('admin.gestion.noticias', compact('noticias', 'administradores', 'tematicas'));
    }


    
    public function editNoticias($id)
    {
        $noticia = noticiasModel::with('tematica')->findOrFail($id);
        $tematicas = noticiasTematicaModel::all();
    
        return view('admin.gestion.noticias-edit', compact('noticia', 'tematicas'));
    }
    

    public function storeNoticias(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'contenido' => 'required|string',
            'portada' => 'required|image',
            'imagen1' => 'image|nullable',
            'imagen2' => 'image|nullable',
            'noticias_tematica_id' => 'required|exists:noticias_tematica,id',
        ]);

        $administrador = Auth::guard('admin')->user();

        if (!$administrador) {
            return redirect()->back()->withErrors(['auth' => 'No hay ningún administrador autenticado.']);
        }

        $data = [
            'titulo' => $validatedData['titulo'],
            'contenido' => $validatedData['contenido'],
            'portada' => $request->file('portada')->store('content-img', 'public'),
            'imagen1' => $request->file('imagen1') ? $request->file('imagen1')->store('content-img', 'public') : null,
            'imagen2' => $request->file('imagen2') ? $request->file('imagen2')->store('content-img', 'public') : null,
            'fecha_publicacion' => now(),
            'administrador_id' => $administrador->id,
            'noticias_tematica_id' => $validatedData['noticias_tematica_id'],
        ];

        $noticia = noticiasModel::create($data);

        Log::info('Noticia creada: ', $noticia->toArray());
        return redirect()->route('admin.gestion.noticias')->with('success', 'Noticia agregada');
    }

    public function updateNoticias(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'contenido' => 'required|string',
            'portada' => 'sometimes|image',
            'imagen1' => 'sometimes|image',
            'imagen2' => 'sometimes|image',
            'noticias_tematica_id' => 'required|exists:noticias_tematica,id',
        ]);
        $noticia = noticiasModel::findOrFail($id);
        $data = [
            'titulo' => $validatedData['titulo'],
            'contenido' => $validatedData['contenido'],
            'noticias_tematica_id' => $validatedData['noticias_tematica_id'],
        ];
        if ($request->hasFile('portada')) {
            $data['portada'] = $request->file('portada')->store('content-img', 'public');
        }
        if ($request->hasFile('imagen1')) {
            $data['imagen1'] = $request->file('imagen1')->store('content-img', 'public');
        }
        if ($request->hasFile('imagen2')) {
            $data['imagen2'] = $request->file('imagen2')->store('content-img', 'public');
        }
    
        $noticia->update($data);
    
        Log::info('Noticia actualizada: ', $noticia->toArray());
    
        return redirect()->route('admin.gestion.noticias')->with('success', 'Noticia actualizada');
    }
    
    

    public function destroyNoticias($id)
    {
        $noticia = noticiasModel::findOrFail($id);
        $noticia->delete();

        return redirect()->route('admin.gestion.noticias')->with('success', 'Noticia eliminada');
    }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\eventosModel;

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
    public function store(Request $request) { 
        $validatedData = $request->validate([ 
            'nombre' => 'required|string|max:50', 
            'categoria' => 'required|string|max:20', 
            'descripcion' => 'required|string', 
            'fecha_fin' => 'required|date', ]); 
            eventosModel::create($validatedData);
            return redirect()->back()->with('success', 'Datos guardados correctamente');
        }
    
    
    public function eventos(){
        
        $items= eventosModel::paginate(4);
        
        return view('/admin/dinamicas/eventos', compact('items'));
    }

    public function storeEventos(Request $request){
        $validatedData = $request->validate([
            'nombre'=> 'required|string',
            'descripcion'=>'required|string',
            'reglas'=>'required|string',
            'fecha_fin'=>'required|date',
        ]);

        eventosModel::create($validatedData);
        return redirect()->route('admin.dinamicas.eventos')->with('exito','Evento agregado');
    }

    public function showEventos($id){
        $evento= eventosModel::findorFail($id);
        return view('admin.dinamicas.edit',compact('evento'));
    }

    public function deleteEventos($id){
        $evento=eventosModel::findorFail($id);
        $evento->delete();

        return redirect()->route('admin.dinamicas.eventos')->with('exit','Evento eliminado');
    }
    
    public function editEventos($id)
    {
        $evento = eventosModel::findOrFail($id);
        return view('admin.dinamicas.eventos-edit', compact('evento'));
    }


    public function updateEventos(Request $request,$id)
    {
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'reglas' => 'required|string',
        'fecha_fin' => 'required|date',
    ]);
        $evento = eventosModel::findOrFail($id);
        $evento->update($validatedData);

        return redirect()->route('admin.dinamicas.eventos')->with('success', 'Evento actualizado');
    }


}

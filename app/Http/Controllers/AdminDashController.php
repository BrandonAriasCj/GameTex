<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    public function store(Request $request) { // Validar los datos del formulario 
        $validatedData = $request->validate([ 
            'nombre' => 'required|string|max:50', 
            'categoria' => 'required|string|max:20', 
            'descripcion' => 'required|string', 
            'fecha_fin' => 'required|date', ]); 

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        }
}

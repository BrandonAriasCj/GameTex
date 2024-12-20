<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Models\ModerModel;
use App\Models\RecompensasModel;
use App\Models\RecompensasTipoModel;
use App\Models\torneoJuegoModel;
use App\Models\TorneosHasUsuariosModel;
use App\Models\TorneosJuegoModel;
use App\Models\TorneosModel;
use App\Models\UserModel;
use App\Models\UsuariosHasRecompensasModel;
use Illuminate\Http\Request;

class RecompensasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin'); 
    }

    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'clave' => 'required|string|max:255',
                'precio' => 'required|numeric|min:0',
                'recompensa_tipo_id' => 'required|exists:recompensas_tipo,id',
            ]);
    
            // Crear y guardar la recompensa
            RecompensasModel::create([
                'nombre' => $validatedData['nombre'],
                'clave_producto' => $validatedData['clave'],
                'precio' => $validatedData['precio'],
                'recompensa_tipo_id' => $validatedData['recompensa_tipo_id'],
                'asignada' => false, // Valor por defecto
            ]);
    
            echo('jpass');
            // Redirigir con mensaje de éxito
            return redirect()->route('admin.crud.recompensa.index')
                             ->with('success', 'Recompensa creada exitosamente.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Capturar errores de validación y redirigir con mensajes de error
            return redirect()->back()
                             ->withErrors($e->validator)
                             ->withInput();
        } catch (\Exception $e) {
            // Manejar cualquier otro error y redirigir con un mensaje genérico
            return redirect()->back()
                             ->with('error', 'Ocurrió un error inesperado al guardar la recompensa. Por favor, inténtalo de nuevo.')
                             ->withInput();
        }
    }
    


    public function showListado(Request $request)
    {
        $recompensas = RecompensasModel::paginate(10);
        $totalQuantity = $recompensas->sum('cantidad');
        $recompensasTipos = RecompensasTipoModel::all();
        return view('admin.crud.recompensas', compact('recompensas', 'totalQuantity', 'recompensasTipos'));
    }
  
    public function edit($id)
    {
        $recompensa = RecompensasModel::with('tipo')->find($id);
        $recompensasTipos = RecompensasTipoModel::all(); 

        if (!$recompensa) {
            return redirect()->route('admin.crud.recompensas')->with('error', 'Recompensa no encontrada.');
        }

        return view('admin.crud.recompensasEdit', compact('recompensa', 'recompensasTipos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'recompensa_tipo_id' => 'required|exists:recompensas_tipo,id',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $recompensa = RecompensasModel::find($id);

        if (!$recompensa) {
            return redirect()->route('admin.crud.recompensas')->with('error', 'Recompensa no encontrada.');
        }

        $recompensa->nombre = $request->nombre;
        $recompensa->recompensa_tipo_id = $request->recompensa_tipo_id;
        $recompensa->cantidad = $request->cantidad;
        $recompensa->precio = $request->precio;
        $recompensa->save();

        return redirect()->route('admin.crud.recompensas')->with('success', 'Recompensa actualizada exitosamente.');
    }

    public function delete($id)
    {
        $recompensa = RecompensasModel::find($id);

        if (!$recompensa) {
            return redirect()->route('admin.crud.recompensas')->with('error', 'Recompensa no encontrada.');
        }

        $recompensa->delete();
        return redirect()->route('admin.crud.recompensas')->with('success', 'Recompensa eliminada exitosamente.');
    }

    public function asignar(Request $request)
    {
        $request->validate([
            'tipo_busqueda' => 'required|string',
            'usuario_id' => 'required|integer|exists:usuarios,id',
            'recompensa_id' => 'required|integer|exists:recompensas,id',
        ]);

        $recompensa = RecompensasModel::findOrFail($request->recompensa_id);

        if ($recompensa->asignada) {
            return redirect()->back()->with('error', 'La recompensa ya ha sido asignada.');
        }

        $usuariosHasRecompensas = new UsuariosHasRecompensasModel();
        $usuariosHasRecompensas->usuario_id = $request->usuario_id;
        $usuariosHasRecompensas->recompensa_id = $request->recompensa_id;
        $usuariosHasRecompensas->estado = true;
        $usuariosHasRecompensas->save();

        $recompensa->asignada = true;
        $recompensa->save();

        return redirect()->route('admin.crud.recompensas')->with('success', 'Recompensa asignada exitosamente.');
    }
        ////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////
        public function showEvento($id)
        {
            $recompensa = RecompensasModel::findOrFail($id);
            return view('admin.crud.recompensasEventos', compact('recompensa'));
        }
    
        //////////////////////////////////////////////////////////////////////////
}
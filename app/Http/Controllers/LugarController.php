<?php

namespace App\Http\Controllers;
use App\Models\LugarModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LugarController extends Controller
{

    // FUNCIONES PARA CRUD'S
    public function index()
    {
        return view('lugarTuristico/lugarTuristico');
    }

    public function mostrar()
    {
        $lugares = LugarModel::all();
        return

            view('lugar/mostrar', compact('lugares'));

    }

    public function agregar(){
        return
               view('lugar/agregar');
    }

    public function insert(Request $request) {

    // Transacción
    DB::beginTransaction();

    try {
        $lugares = new LugarModel();

        $lugares->nombre_lugar = $request->post('nombre_lugar');
        $lugares->descripcion = $request->post('descripcion');
        $lugares->ubicacion = $request->post('ubicacion');
        $lugares->horario = $request->post('horario');
        $lugares->costo_entrada  = $request->post('costo_entrada');

        $lugares->save();
        $lugarActualizado = LugarModel::all();

        // sin error-ejecuta la transacción
        DB::commit();

        return view('lugar/mostrar', ['lugares' => $lugarActualizado]);

    } catch (\Exception $e) {
        DB::rollback();

        return 'Error al insertar nuevo lugar turístico: ' . $e->getMessage();
    }
}

public function destroy($id)
    {
        $lugar = LugarModel::find($id);

        if (!$lugar) {
            return redirect()->route('lugar.mostrar')->with('error', 'Lugar no encontrado');
        }
        $lugar->delete();
        return redirect()->route('lugar.mostrar')->with('success', 'Lugar eliminado con éxito');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\GastronomiaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GastronomiaController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $gastronomias = GastronomiaModel::all();
        return

            view('gastronomia.mostrar', compact('gastronomias'));

    }

    public function agregar(){
        return
               view('gastronomia/agregar');
    }

    public function insert(Request $request) {

    // Transacción
    DB::beginTransaction();

    try {
        $gastronomias = new GastronomiaModel();

        $gastronomias->nombre_restaurante = $request->post('nombre_restaurante');
        $gastronomias->tipo_comida = $request->post('tipo_comida');
        $gastronomias->tipo_cocina = $request->post('tipo_cocina');
        $gastronomias->capacidad = $request->post('capacidad');
        $gastronomias->direccion  = $request->post('direccion');
        $gastronomias->telefono  = $request->post('telefono');
        $gastronomias->descripcion  = $request->post('descripcion');

        $gastronomias->save();
        $gastroActualizadas = GastronomiaModel::all();

        // sin error-ejecuta la transacción
        DB::commit();

        return view('gastronomia.mostrar', ['gastronomias' => $gastroActualizadas]);

    } catch (\Exception $e) {
        DB::rollback();

        return 'Error al insertar gastronomia: ' . $e->getMessage();
    }
}

public function destroy($id)
    {
        $gastronomia = GastronomiaModel::find($id);

        if (!$gastronomia) {
            return redirect()->route('gastronomia.mostrar')->with('error', 'Comida no encontrada');
        }
        $gastronomia->delete();
        return redirect()->route('gastronomia.mostrar')->with('success', 'Comida eliminada con éxito');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Models;
use App\Models\FestividadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FestividadController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $festividades = FestividadModel::all();
        return

            view('festividad.mostrar', compact('festividades'));

    }


        public function agregar(){
            return
                   view('festividad/agregar');
        }

        public function insert(Request $request) {

        // Transacción
        DB::beginTransaction();

        try {
            $festividades = new FestividadModel();

            $festividades->nombre_festividad = $request->post('nombre_festividad');
            $festividades->descripcion = $request->post('descripcion');
            $festividades->precio = $request->post('precio');
            $festividades->atracciones = $request->post('atracciones');
            $festividades->fecha  = $request->post('fecha');

            $festividades->save();
            $festActualizadas = FestividadModel::all();

            // sin error-ejecuta la transacción
            DB::commit();

            return view('festividad/mostrar', ['festividades' => $festActualizadas]);

        } catch (\Exception $e) {
            DB::rollback();

            return 'Error al insertar festividad: ' . $e->getMessage();
        }
    }

    // Método para editar una festividad
    public function editar(FestividadModel $id)
    {


        // Cargar el modelo de Festividad
        $festividadModel = FestividadModel::all();

        // Obtener datos específicos de un registro
        $data['festividad'] = $festividadModel->find($id);

        // Devolver la vista combinando diferentes partes de la página
        return
            view('festividad.editar', $data);
    }

    public function update()
    {
        $festividadModel = FestividadModel::all();
        $data = [
            "nombre_festividad" => $_POST['nombre_festividad'],
            "descripcion" => $_POST['descripcion'],
            "precio" => $_POST['precio'],
            "atracciones" => $_POST['atracciones'],
            "fecha" => $_POST['fecha']
        ];
        $festividadModel->update($_POST['id'], $data);
        return redirect('festividad/mostrar', 'refresh');
    }

    public function destroy($id)
    {
        $festividad = FestividadModel::find($id);

        if (!$festividad) {
            return redirect()->route('festividad.mostrar')->with('error', 'Festividad no encontrada');
        }
        $festividad->delete();
        return redirect()->route('festividad.mostrar')->with('success', 'Festividad eliminada con éxito');
    }

}


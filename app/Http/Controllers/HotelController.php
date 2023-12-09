<?php

namespace App\Http\Controllers;
use App\Models\HotelModel;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $hoteles = HotelModel::all();
        return

            view('hotel.mostrar', compact('hoteles'));

    }

    public function agregar(){
        return
               view('hotel.agregar');
    }

    public function insert(Request $request) {

    // Transacción
    DB::beginTransaction();

    try {
        $hoteles = new HotelModel();

        $hoteles->nombre_hotel = $request->post('nombre_hotel');
        $hoteles->direccion = $request->post('direccion');
        $hoteles->telefono = $request->post('telefono');
        $hoteles->precio_hospedaje = $request->post('precio_hospedaje');
        $hoteles->descripcion  = $request->post('descripcion');
        $hoteles->estrellas  = $request->post('estrellas');

        $hoteles->save();
        $hotelActualizado = HotelModel::all();

        // sin error-ejecuta la transacción
        DB::commit();

        return view('hotel.mostrar', ['hoteles' => $hotelActualizado]);

    } catch (\Exception $e) {
        DB::rollback();

        return 'Error al insertar hotel: ' . $e->getMessage();
    }


}

public function destroy($id)
    {
        $hotel = HotelModel::find($id);

        if (!$hotel) {
            return redirect()->route('hotel.mostrar')->with('error', 'Hotel no encontrado');
        }
        $hotel->delete();
        return redirect()->route('hotel.mostrar')->with('success', 'Hotel eliminado con éxito');
    }























































































    //Transaccion que agrega un nuevo hotel desde código

    public function transaccion1()
    {
        // Inicia la transacción
        DB::beginTransaction();

        try {
            // Crea un nuevo hotel
            $nuevoHotel = new HotelModel();
            $nuevoHotel->nombre_hotel = 'Nuevo Hotel';
            $nuevoHotel->direccion = 'Dirección del nuevo hotel';
            $nuevoHotel->telefono = '123456789';
            $nuevoHotel->precio_hospedaje = 100.00;
            $nuevoHotel->descripcion = 'Descripción del nuevo hotel';
            $nuevoHotel->estrellas = 4;
            $nuevoHotel->save();

            $hotelesActualizados = HotelModel::all();
            // Confirma la transacción si todo está bien
            DB::commit();

            return view('hotel/mostrar',['hoteles' => $hotelesActualizados]);

            //return response()->json(['mensaje' => 'Transacción completada con éxito'], 200);
        } catch (\Exception $e) {
            // Si ocurre un error, revierte la transacción
            DB::rollBack();

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function transaccionModificar()
    {
        // Inicia la transacción
        DB::beginTransaction();

        try {

            $hotelExistente = HotelModel::find(6); //ID del hotel a actualizar

            if ($hotelExistente) {
                // Actualiza atributos
                $hotelExistente->nombre_hotel = 'si';
                $hotelExistente->descripcion = 'Nueva descripción';
                $hotelExistente->save();
            } else {
                throw new \Exception('El hotel no existe.');
            }

            $hotelModificado = HotelModel::all();

            DB::commit();

            return view('hotel/mostrar',['hoteles' => $hotelModificado]);
        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function eliminarHotel($hotelId)
    {
        // Inicia la transacción
        DB::beginTransaction();

        try {
            // Encuentra el hotel por su ID y elimínalo
            $hotel = HotelModel::find($hotelId);

            if ($hotel) {
                $hotel->delete();
            } else {
                throw new \Exception('Hotel no encontrado.');
            }

            $hoteleliminado = HotelModel::all();
            // Confirma la transacción si todo está bien
            DB::commit();

            // Devuelve la vista con un mensaje de éxito
            return view('hotel/mostrar',['hoteles' => $hoteleliminado]);
        } catch (\Exception $e) {
            // Si ocurre un error, revierte la transacción
            DB::rollBack();

            // Devuelve la vista con un mensaje de error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}

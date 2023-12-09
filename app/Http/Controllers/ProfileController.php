<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $profiles = ProfileModel::all();
        return

            view('profile.mostrar', compact('profiles'));

    }


        public function agregar(){
            return
                   view('profile.agregar');
        }

        public function insert(Request $request) {

        // Transacción
        DB::beginTransaction();

        try {
            $profiles = new ProfileModel();

            $profiles->profile = $request->post('profile');
            $profiles->description = $request->post('description');
            $profiles->created_at = $request->post('created_at');


            $profiles->save();
            $profileActualizado = ProfileModel::all();

            // sin error-ejecuta la transacción
            DB::commit();

            return view('profile.mostrar', ['profiles' => $profileActualizado]);

        } catch (\Exception $e) {
            DB::rollback();

            return 'Error al insertar perfil: ' . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $profile = ProfileModel::find($id);

        if (!$profile) {
            return redirect()->route('profile.mostrar')->with('error', 'Perfil no encontrado');
        }
        $profile->delete();
        return redirect()->route('profile.mostrar')->with('success', 'Perfil eliminado con éxito');
    }

}

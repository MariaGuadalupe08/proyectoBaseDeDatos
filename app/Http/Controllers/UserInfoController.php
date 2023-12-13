<?php

namespace App\Http\Controllers;
use App\Models\UserInfoModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{

    // FUNCIONES PARA CRUD'S
    public function index()
    {

    }

    public function mostrar()
    {
        $usersinfo = UserInfoModel::all();
        return

            view('userInfo.mostrar', compact('usersinfo'));

    }

    public function agregar(){
        return
               view('userInfo.agregar');
    }

    public function insert(Request $request) {

    // Transacción
    DB::beginTransaction();

    try {
        $userinfos = new UserInfoModel();

        $userinfos->name = $request->post('name');
        $userinfos->lastname = $request->post('lastname');
        $userinfos->birthday = $request->post('birthday');
        $userinfos->gender = $request->post('gender');
        $userinfos->phone  = $request->post('phone');
        $userinfos->bio  = $request->post('bio');
        $userinfos->website  = $request->post('website');
        $userinfos->status  = $request->post('status');

        $userinfos->save();
        $infosActualizadas = UserInfoModel::all();

        // sin error-ejecuta la transacción
        DB::commit();

        return view('userInfo.mostrar', ['usersinfo' => $infosActualizadas]);

    } catch (\Exception $e) {
        DB::rollback();

        return 'Error al insertar información: ' . $e->getMessage();
    }
}

public function destroy($id)
    {
        $userInfo = UserInfoModel::find($id);

        if (!$userInfo) {
            return redirect()->route('userInfo.mostrar')->with('error', 'Información no encontrada');
        }
        $userInfo->delete();
        return redirect()->route('userInfo.mostrar')->with('success', 'nformación eliminada con éxito');
    }

}

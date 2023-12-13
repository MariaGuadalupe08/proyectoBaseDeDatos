<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // FUNCIONES PARA CRUD'S
    public function index()
    {

    }

    public function mostrar()
    {
        $users = UserModel::all();
        return

            view('user.mostrar', compact('users'));

    }

    public function agregar(){
        return
               view('user.agregar');
    }

    public function insert(Request $request) {

    // Transacción
    DB::beginTransaction();

    try {
        $usuarios = new UserModel();

        $usuarios->username = $request->post('username');
        $usuarios->password = $request->post('password');
        $usuarios->status = $request->post('status');
        $usuarios->profile = $request->post('profile');
        $usuarios->created_at  = $request->post('created_at');

        $usuarios->save();
        $userActualizado = UserModel::all();

        // sin error-ejecuta la transacción
        DB::commit();

        return view('user.mostrar', ['users' => $userActualizado]);

    } catch (\Exception $e) {
        DB::rollback();

        return 'Error al insertar usuario: ' . $e->getMessage();
    }
}

public function destroy($id)
    {
        $user = UserModel::find($id);

        if (!$user) {
            return redirect()->route('user.mostrar')->with('error', 'usuario no encontrada');
        }
        $user->delete();
        return redirect()->route('user.mostrar')->with('success', 'usuario eliminada con éxito');
    }

    public function getUserProfiles(): View
    {
        $userProfiles = DB::table('users')
            ->join('profiles', 'users.profile', '=', 'profiles.profile_id')
            ->select(
                'users.users_id',
                'users.username',
                'users.password',
                'users.status AS user_status',
                'profiles.profile_id',
                'profiles.profile',
                'profiles.description',
                'profiles.status AS profile_status',
                'users.created_at AS user_created_at',
                'users.updated_at AS user_updated_at',
                'users.deleted_at AS user_deleted_at',
                'profiles.created_at AS profile_created_at',
                'profiles.updated_at AS profile_updated_at',
                'profiles.deleted_at AS profile_deleted_at'
            )
            ->get();

        return view('consultas.user_profiles', ['userProfiles' => $userProfiles]);
    }




}

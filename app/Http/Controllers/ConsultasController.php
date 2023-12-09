<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{


    public function mostrarUsuariosConPerfiles()
    {
        $usuariosconperfiles = DB::table('users')
            ->join('profiles', 'users.profile', '=', 'profiles.profile_id')
            ->select('users.*', 'profiles.profile')
            ->get();

        return view('consultas.consulta1', compact('usuariosconperfiles'));
    }

    public function mostrarHotelesConAdmin()
    {
        $hotelesconadmins = DB::table('Hoteles')
            ->join('users', 'Hoteles.users_id', '=', 'users.users_id')
            ->select('Hoteles.*', 'users.username as admin_username')
            ->get();

        return view('consultas.consulta2', compact('hotelesconadmins'));
    }

    public function mostrarLugaresConAdmin()
    {
        $lugaresconadmins = DB::table('LugaresTuristicos')
            ->join('users', 'LugaresTuristicos.users_id', '=', 'users.users_id')
            ->select('LugaresTuristicos.*', 'users.username as admin_username')
            ->get();

        return view('consultas.consulta3', compact('lugaresconadmins'));
    }

}

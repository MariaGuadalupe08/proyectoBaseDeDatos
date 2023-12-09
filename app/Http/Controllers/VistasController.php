<?php

namespace App\Http\Controllers;

use App\Http\Models;
use App\Models\FestividadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VistasController extends Controller
{

    public function mostrarVista1()
    {
        //consulta la vista en la BD
       $infoUsuarios = DB::table ('user_info')->select('*')->get();

        return view('vistas.vista1', compact("infoUsuarios"));
    }

    public function mostrarVista2()
    {
        //consulta la vista en la BD
       $hotelesUsuarios = DB::table ('hoteles_users')->select('*')->get();

        return view('vistas.vista2', compact("hotelesUsuarios"));
    }

    public function mostrarVista3()
    {
        //consulta la vista en la BD
       $comidasUsuarios = DB::table ('users_gastronomia')->select('*')->get();

        return view('vistas.vista3', compact("comidasUsuarios"));
    }

    public function mostrarVista4()
    {
        //consulta la vista en la BD
       $lugaresUsuarios = DB::table ('lugares_users')->select('*')->get();

       //dd($lugaresUsuarios);
        return view('vistas.vista4', compact("lugaresUsuarios"));
    }

    public function mostrarVista5()
    {
        //consulta la vista en la BD
       $festividades = DB::table ('vista_festividades')->select('*')->get();

        return view('vistas.vista5', compact("festividades"));
    }

}

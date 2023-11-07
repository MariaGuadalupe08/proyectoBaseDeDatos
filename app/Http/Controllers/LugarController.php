<?php

namespace App\Http\Controllers;
use App\Models\LugarModel;

use Illuminate\Http\Request;

class LugarController extends Controller
{
    public function index()
    {
        return view('lugarTuristico/lugarTuristico');
    }

    public function mostrar()
    {
        $lugares = LugarModel::all();
        return

            view('lugarTuristico/mostrar', compact('lugares'));

    }

}

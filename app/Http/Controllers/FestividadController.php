<?php

namespace App\Http\Controllers;

use App\Models\FestividadModel;
use Illuminate\Http\Request;

class FestividadController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $festividades = FestividadModel::all();
        return

            view('festividad/mostrar', compact('festividades'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GastronomiaModel;
use Illuminate\Http\Request;

class GastronomiaController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $gastronomias = GastronomiaModel::all();
        return

            view('gastronomia/mostrar', compact('gastronomias'));

    }
}

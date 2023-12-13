<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BaseDeDatosController extends Controller
{

    public function InfoDataBase()
    {
        return view('BaseDeDatos');
    }

}

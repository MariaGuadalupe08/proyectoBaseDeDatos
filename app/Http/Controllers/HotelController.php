<?php

namespace App\Http\Controllers;
use App\Models\HotelModel;

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

            view('hotel/mostrar', compact('hoteles'));

    }

}

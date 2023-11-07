<?php

namespace App\Http\Controllers;
use App\Models\UserModel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $users = UserModel::all();
        return

            view('user/mostrar', compact('users'));

    }

}

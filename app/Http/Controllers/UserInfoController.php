<?php

namespace App\Http\Controllers;
use App\Models\UserInfoModel;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {

    }

    public function mostrar()
    {
        $usersinfo = UserInfoModel::all();
        return

            view('userInfo/mostrar', compact('usersinfo'));

    }

}

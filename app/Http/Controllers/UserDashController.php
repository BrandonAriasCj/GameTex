<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

//pequeño comentario xdxdxdxddx
class UserDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.users'); 
    }

    public function index()
    {
        $actividades = []; 
        return view('dashboard', compact('actividades'));
    }

}

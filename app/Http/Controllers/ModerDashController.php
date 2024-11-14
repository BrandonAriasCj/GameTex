<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;

class ModerDashController extends Controller
{
    //
}
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class ModerDashController extends Controller { 
    public function __construct()
    {
        $this->middleware('auth.moderator');
    }

    public function index()
    {

        return view('moder.dashboard');

    } 
}

>>>>>>> a04c7158db67accb3e6d5b879b5b4e4edca1f5c5

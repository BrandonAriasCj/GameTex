<?php

namespace App\Http\Controllers;
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


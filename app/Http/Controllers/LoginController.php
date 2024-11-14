<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminModel;
use App\Models\ModerModel;


class LoginController extends Controller
{
    


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:admin,moderator'
        ]);

        $credentials = $request->only('email', 'password');
        $userType = $request->input('user_type');

        if ($userType === 'admin') {
            Auth::guard('moderator')->logout(); // Asegúrate de cerrar sesión de cualquier otro guardia
            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        } elseif ($userType === 'moderator') {
            Auth::guard('admin')->logout(); // Asegúrate de cerrar sesión de cualquier otro guardia
            if (Auth::guard('moderator')->attempt($credentials)) {
                Log::info('Usuario autenticado como moderador');
                $request->session()->regenerate();
                return redirect()->intended('/moder/dashboard');
            } else {
                Log::info('Fallo en autenticación de moderador');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        // Determinamos qué guard está actualmente autenticado
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('moderator')->check()) {
            Auth::guard('moderator')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

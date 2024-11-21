<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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
            'user_type' => 'required|in:admin,moderator,users'
        ]);

        $credentials = $request->only('email', 'password');
        $userType = $request->input('user_type');

        // Manejar autenticación según el tipo de usuario
        switch ($userType) {
            case 'admin':
                Auth::guard('moderator')->logout(); // Cerrar sesión de cualquier otro guardia
                Auth::guard('users')->logout();
                if (Auth::guard('admin')->attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/admin/dashboard');
                }
                break;

            case 'moderator':
                Auth::guard('admin')->logout();
                Auth::guard('users')->logout();//lo mismo
                if (Auth::guard('moderator')->attempt($credentials)) {
                    Log::info('Usuario autenticado como moderador');
                    $request->session()->regenerate();
                    return redirect()->intended('/moder/dashboard');
                } else {
                    Log::info('Fallo en autenticación de moderador');
                }
                break;

            case 'users':
                Auth::guard('admin')->logout();
                Auth::guard('moderator')->logout();
                if (Auth::guard('users')->attempt($credentials)) {
                    Log::info('Usuario autenticado como usuario');
                    $request->session()->regenerate();
                    return redirect('/dashboard'); // Redirigir a user
                } else {
                    Log::info('Fallo en autenticación de usuario');
                }
                break;
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        // Determinar qué guard está actualmente autenticado
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('moderator')->check()) {
            Auth::guard('moderator')->logout();
        } elseif (Auth::guard('users')->check()) {
            Auth::guard('users')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
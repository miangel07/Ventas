<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLogin(Request $request)
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {

        $credenciales =  $request->validate([
            'correo' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if (!Auth::attempt($credenciales, $request->boolean('remember'))) {
            return back()->withErrors([
                'correo' => 'Credenciales incorrectas.',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('home')->with('status', 'Sesión Iniciada Correctamente');
    }
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login')->with('status', 'Sesión Cerrada Correctamente');
    }
}

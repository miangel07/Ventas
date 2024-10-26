<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\validation\Rules;
use App\Models\User;
class UsuarioControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('auth.registro');
    }
    public function formularioUsers()
    {
        return view('clientes.registroUser');
    }
    public function indexUsuario()
    {
        return view('clientes.user');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       $request ->validate(
            [
                'nombre'=> ['required','string','max:255'],
                'correo'=> ['required','string','email','unique:users','max:255'],
                'password'=> ['required','string','confirmed',Rules\Password::default()],
                'direccion'=> ['required','string','max:255'],
                'telefono'=> ['required','string','max:255'],
               'numeroCedula' => ['required', 'string', 'max:255', 'unique:users'], 
                'rol' => ['nullable', 'string'],
            ]
        );
     User::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'password' => bcrypt($request->password),
        'direccion' => $request->direccion,
        'telefono' => $request->telefono,
        'numeroCedula' => $request->numeroCedula,
        'rol' => $request->rol ?? 'administrador',
     ]); 
     if (!$request->has('rol')) {
        
        return redirect()->route('login')->with('success', '¡Registro exitoso!');
    }
    return redirect()->route('clientes')->with('success', '¡Registro exitoso!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function listarUsuarios(Request $request)
    {
    
        $usuarios = User::paginate(10);
        return view('clientes.user', compact('usuarios'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $usuario = User::findOrFail($id);
        return view('clientes.registroUser', compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->estadoUsuario = $usuario->estadoUsuario === "inactivo" ? "activo" : "inactivo";
        $usuario->save();
        return redirect()->route('clientes')->with('success', '¡Estado actualizado correctamente!');
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request ->validate(
            [
                'nombre'=> ['required','string','max:255'],
                'correo'=> ['required','string','email','unique:users,correo,'.$id],
                'direccion'=> ['required','string','max:255'],
                'telefono'=> ['required','string','max:255'],
               'numeroCedula' => ['required', 'string', 'max:255', 'unique:users,numeroCedula,'.$id], 
            ]
        );
        $usuario = User::findOrFail($id);
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->numeroCedula = $request->numeroCedula;
        $usuario->save();
        return redirect()->route('clientes')->with('success', 'Usuario actualizado correctamente!');
    


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

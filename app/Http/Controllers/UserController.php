<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::select('id','name', 'email')->get();
        $roles = Role::all();
        return view('index', compact('usuarios','roles'));
    }

    public function destroy($id){
        $destruir = User::find($id); 

    if ($destruir) {
        $destruir->delete();
        return redirect()->to('index');
    }
}

    public function update(Request $request, $id)
    {
        $guardar = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            
        ]);
    
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
    
        $user= User::find($id);
        $user->roles()->sync($request->roles);
    
        if (!$user) {
            // Manejar el caso donde el usuario no se encontró.
        }
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
    
        $user->save();
    
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();
        return view('editar', compact('usuario','roles'));
    } 


}
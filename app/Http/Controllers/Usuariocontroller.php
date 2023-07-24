<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Validator;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('index', compact('usuarios'));
    }

    // Resto de los métodos del controlador


    public function create()
    {
        $usuarios = Usuario::all(); 
        return view('create', compact('usuarios'));
    }


    public function show($id)
    {
    $index = usuario::find($id);  
    return view('index', compact('index'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $guardar = validator::make($request->all(),[
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
        ]);
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
        $usuarios = [
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
        ];
        
        return redirect()->to('/index');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $destruir = usuario::find($id); 

    if ($destruir) {
        $destruir->delete();
        return redirect()->to('/index');
    }
}
}

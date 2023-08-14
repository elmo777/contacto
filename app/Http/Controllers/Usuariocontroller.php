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


    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $usuarios = Usuario::when($search, function ($query, $search) {
            return $query->where('nombres', 'like', '%' . $search . '%')
                         ->orWhere('apellidos', 'like', '%' . $search . '%')
                         ->orWhere('telefono', 'like', '%' . $search . '%')
                         ->orWhere('direccion', 'like', '%' . $search . '%')
                         ->orWhere('email', 'like', '%' . $search . '%');
        })->get();

        return response()->json($usuarios);
    }

    // Resto de los métodos del controlador


    public function create()
    {
        $usuarios = Usuario::all(); 
        return view('create', compact('usuarios'));
    }


    public function show($id)
    {
    // $index = usuario::find($id);  
    // return view('index', compact('index'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     * 
     * 
     * 
     */
    // ...

    public function update(Request $request, $id)
    {
        $guardar = Validator::make($request->all(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
        ]);
    
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
    
        $usuario = Usuario::find($id);
    
        if (!$usuario) {
            // Manejar el caso donde el usuario no se encontró.
        }
    
        $usuario->nombres = $request->input('nombres');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->telefono = $request->input('telefono');
        $usuario->email = $request->input('email');
        $usuario->direccion = $request->input('direccion');
    
        $usuario->save();
    
        return redirect()->to('index');
    }

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
        $datos = [
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
        ];

        
        $usuarios = new usuario();
        $usuarios->fill($datos);
        $usuarios->save();
        
        return redirect()->to('index');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $destruir = usuario::find($id); 

    if ($destruir) {
        $destruir->delete();
        return redirect()->to('index');
    }
}
public function crear($id)
{
    $usuario = Usuario::find($id);
    return view('editar', compact('usuario'));
}
}


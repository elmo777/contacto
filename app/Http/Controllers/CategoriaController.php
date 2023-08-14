<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Validator;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias', compact('categorias'));
    }


    

    // Resto de los métodos del controlador


    public function create()
    {
        $categorias = Categorias::all(); 
        return view('createcategoria', compact('categorias'));
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
    
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
    
        $categorias = Categorias::find($id);
    
        if (!$categorias) {
            
        }
    
        $categorias->nombre = $request->input('nombre');
        $categorias->descripcion = $request->input('descripcion');
        $categorias->precio = $request->input('precio');
        $categorias->stock = $request->input('stock');

    
        $categorias->save();
    
        return redirect()->to('categorias');
    }

    public function store(Request $request)
    {
        
        $guardar = validator::make($request->all(),[
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
        $datos = [
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'stock' => $request->input('stock'),
            
        ];

        
        $categorias = new Categorias();
        $categorias->fill($datos);
        $categorias->save();
        
        return redirect()->to('categorias');
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
        $destruir = Categorias::find($id); 

    if ($destruir) {
        $destruir->delete();
        return redirect()->to('categorias');
    }
}
public function edit($id)
{
    $categorias = Categorias::find($id);
    return view('editarcategoria', compact('categorias'));
}
}


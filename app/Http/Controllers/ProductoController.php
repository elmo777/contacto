<?
namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Validator;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return view('productos', compact('productos'));
    }

    

    public function create()
    {
        $productos = Productos::all();
        return view('createproducto', compact('productos'));
    }

    public function show($id)
    {
        $producto = Productos::find($id);
        return view('show', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $guardar = Validator::make($request->all(), [
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }

        $producto = Productos::find($id);

        if (!$producto) {
            // Manejar el caso donde el producto no se encontró.
        }

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');

        $producto->save();

        return redirect()->to('productos');
    }

    public function store(Request $request)
    {
        $guardar = validator::make($request->all(),[
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        if ($guardar->fails()) {
            return redirect()->back()->withErrors($guardar)->withInput();
        }
        $producto = new Productos();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');

        $producto->save();

        return redirect()->to('productos');
    }

    public function destroy($id)
    {
        $producto = Productos::find($id);

        if (!$producto) {
            // Manejar el caso donde el producto no se encontró.
        }

        $producto->delete();

        return redirect()->to('productos');
    }
    public function editar($id)
{
    $producto = Productos::find($id);
    return view('editarproducto', compact('productos'));
}
}


<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $productos = Producto::paginate(5);
        return view('productos', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $localizacions = Localizacion::all();
        return view('productos/addProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->codigo = $request->codigo;
        $producto->modelo = $request->modelo;
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizacion_id = $request->localizacion_id;
        $producto->save();

        //SUBIR IMAGEN
        $id = $producto->id;
        $request->file('imagen')->storeAs(
            'public',
            'producto_' . $id . '.jpg'
        );

        return redirect()->route('productos.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $producto = Producto::find(($id));
        return view('productos/showProducto', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $producto = Producto::find(($id));
        return view('/productos/editProducto', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto = Producto::find(($producto->id));
        $producto->codigo = $request->codigo;
        $producto->modelo = $request->modelo;
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizacion_id = $request->localizacion_id;
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Producto::destroy($id);
        return redirect('/productos');
    }

    public function showProductoLocalizacion($id)
    {
        $producto = Producto::find($id);
        $localizacions = Localizacion::all();
        return view('/productos/addLocalizacionProducto', ['producto' => $producto, 'localizacions' => $localizacions]);
    }


    public function AddLocalizacion(Request $request, $id)
    {
        $producto = Producto::find(($id));
        $producto->localizacion_id = $request->localizacion_id;
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function pintarProductos(Producto $productos)
    {

        echo "pintando productos";
    }

    public function buscar(Request $request)
    {
        echo "aqui";
    }
}

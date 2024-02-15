<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class LocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localizacions = Localizacion::all();
        return view('localizacions', ['localizacions' => $localizacions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localizacion/addLocation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $localizacion = new Localizacion;

        $localizacion->ciudad = ($request->ciudad);
        $localizacion->nombre_edificio = ($request->nombre_edificio);
        $localizacion->direccion_edificio = ($request->direccion_edificio);



        $localizacion->save();

        return redirect('/localizacions');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $localizacion = Localizacion::find(($id));
        return view('localizacion/showLocalizacion', ['localizacion' => $localizacion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Localizacion $localizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Localizacion $localizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Localizacion::destroy($id);
        return redirect('/localizacions');
    }
}

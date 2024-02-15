<?php

use App\Http\Controllers\ApiProductoController;
use App\Http\Resources\productoResource;
use App\Http\Resources\categoriaResource;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});


//crear el token
Route::post('/tokens/create', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    return response()->json([
        'token' => $request->user()->createToken($request->email, ['*'], now()->addWeek())->plainTextToken,
        'message' => 'Success'
    ]);
});

//RUTAS API
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/productos', function () {
        return productoResource::collection(Producto::paginate(5));
    });

    Route::get('/productos/{id}', function (string $id) {
        return new productoResource(Producto::findOrFail($id));
    });

    Route::delete('/productos/{id}', function (string $id) {
        if (Producto::findOrFail($id)) {
            Producto::destroy($id);
            return ['message' => 'Producto eliminado'];
        }
    });

    Route::post('/producto', function (Request $request) {
        $producto = new Producto;
        $producto->modelo = $request->modelo;
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizacion_id = $request->localizacion_id;
        $producto->imagen = "null";

        $producto->save();


        return [
            'message' => 'Producto creado correctamente',
            'Producto' => $producto
        ];
    });

    // CATEGORIA
    Route::get("/categorias", function () {
        return categoriaResource::collection(Categoria::paginate(5));
    });
});

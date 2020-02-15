<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProductUpdateRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('products.index', compact('products', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->nombre            = $request->nombre;
        $product->stock_actual              = $request->stock_actual;
        $product->precio             = $request->precio;
        $product->descripcion         = $request->descripcion;



        $vproducts = \DB::select('SELECT * FROM products WHERE nombre = ?' , [$request->nombre]);
            

        if ($vproducts) {
            Alert::error('Este producto ya existe en el inventario','¡Error en el registro!');
    
            return redirect()->route('productos.create');
            die();
     }




// $bitacoras = new App\Bitacora;

// $bitacoras->user =  Auth::user()->name;
// $bitacoras->lastname =  Auth::user()->lastname;
// $bitacoras->role =  Auth::user()->role;
// $bitacoras->action = 'Ha registrado un nuevo trabajador';
// $bitacoras->save();

        $product->save();

        Alert::success('Operación realizada con éxito','¡Cliente registrado!');

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Product::find($id);

        return view('products.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\ProductUpdateRequest $request, $id)
    {
        $productsUpdate = Product::findOrFail($id);
        $productsUpdate->nombre          = $request->nombre;
        $productsUpdate->stock_actual          = $request->stock_actual;
        $productsUpdate->precio        = $request->precio;
        $productsUpdate->descripcion             = $request->descripcion;


        $productsUpdate->save();

        Alert::success('Operación realizada con éxito','¡Producto editado!');

        return redirect()->route('productos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productDelete = Product::findOrFail($id);
		
        // $bitacorasDelete = new App\Bitacora;
        
        // $bitacorasDelete->user =  Auth::user()->name;
        // $bitacorasDelete->lastname =  Auth::user()->lastname;
        // $bitacorasDelete->role =  Auth::user()->role;
        // $bitacorasDelete->action = 'Ha eliminado una materia prima';
        // $bitacorasDelete->save();
                $productDelete->delete();
                Alert::success('Operación realizada con éxito','¡Producto eliminado!');
        
                return redirect()->route('productos.index');
    }
}

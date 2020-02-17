<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;
use App\Dinero;
use App\ClientProduct;
use DB;

use RealRashid\SweetAlert\Facades\Alert;

class ClientProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clipro = \DB::select('SELECT products.id, client_product.id, products.nombre AS proNombre, clients.nombre AS cliNombre, client_product.cantidad, client_product.total, products.precio 

        FROM products, clients, client_product WHERE client_product.product_id = products.id AND client_product.client_id = clients.id');

   
        $i=1;

        return view('clients_products.index', compact('clipro', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients_products.create');
    }


  
    
    public function getproducts(Request $request)
    {

        
         if($request->ajax()){
            $producto= \DB::select('SELECT products.id, products.precio, products.nombre AS proNombre 
            
            FROM products WHERE products.id = ? ', [$request->product_id]);

         }


            return response()->json($producto);

            
            
    }

    public function getclients(Request $request)
    {

        
         if($request->ajax()){
            $cliente= \DB::select('SELECT clients.id, nombre AS cliNombre 
            
            FROM clients');

         }

$clientesArray = [];

         foreach($cliente as $item){
             $clientesArray[$item->id] = $item->cliNombre;
         }

            return response()->json($clientesArray);

            
            
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $clipro = new ClientProduct;

        $clipro->client_id           = $request->client_id;
        $clipro->product_id           = $request->product_id;
        $clipro->cantidad          = $request->cantidad;
        $clipro->precio          = $request->precio;

       $total = $request->cantidad * $request->precio;

       $clipro->total = $total;

       $clipro->save();


       $dinero = DB::table('dineros')->get();

        
       //Actualizo el inventario
       
       $dinero = DB::select('SELECT * FROM dineros WHERE id = 1');

      $sumarAlDinero = $dinero[0]->dinero + $total;


       $actualizarDinero = Dinero::find(1);

       $actualizarDinero->dinero = $sumarAlDinero;

       $actualizarDinero->save();



      
   



  


// $bitacoras = new App\Bitacora;

// $bitacoras->user =  Auth::user()->name;
// $bitacoras->lastname =  Auth::user()->lastname;
// $bitacoras->role =  Auth::user()->role;
// $bitacoras->action = 'Ha registrado un nuevo trabajador';
// $bitacoras->save();


        Alert::success('Operación realizada con éxito','¡Venta registrada!');

        return redirect()->route('clientes-productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

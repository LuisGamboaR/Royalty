<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('clients.index', compact('clients', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;

        $client->correo            = $request->correo;
        $client->rif              = $request->rif;
        $client->nombre             = $request->nombre;
        $client->direccion         = $request->direccion;
        $client->telefono         = $request->telefono;



        $vclients = \DB::select('SELECT * FROM clients WHERE correo = ?' , [$request->correo]);
            

        if ($vclients) {
            Alert::error('Este correo esta afiliado a un cliente existente','¡Error en el registro!');
    
            return redirect()->route('clientes.create');
            die();
     }

     $vclients2 = \DB::select('SELECT * FROM clients WHERE rif = ?' , [$request->rif]);
            

     if ($vclients2) {
         Alert::error('Este rif esta afiliado a un cliente existente','¡Error en el registro!');
 
         return redirect()->route('clientes.create');
         die();
  }

  $vclients3 = \DB::select('SELECT * FROM clients WHERE telefono = ?' , [$request->telefono]);
            

  if ($vclients3) {
      Alert::error('Este telefono esta afiliado a un cliente existente','¡Error en el registro!');

      return redirect()->route('clientes.create');
      die();
}




// $bitacoras = new App\Bitacora;

// $bitacoras->user =  Auth::user()->name;
// $bitacoras->lastname =  Auth::user()->lastname;
// $bitacoras->role =  Auth::user()->role;
// $bitacoras->action = 'Ha registrado un nuevo trabajador';
// $bitacoras->save();

        $client->save();

        Alert::success('Operación realizada con éxito','¡Cliente registrado!');

        return redirect()->route('clientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Client::find($id);

        return view('clients.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\ClientUpdateRequest $request, $id)
    {

        $clientsUpdate = Client::findOrFail($id);
        $clientsUpdate->correo          = $request->correo;
        $clientsUpdate->nombre          = $request->nombre;
        $clientsUpdate->telefono        = $request->telefono;
        $clientsUpdate->rif             = $request->rif;
        $clientsUpdate->direccion       = $request->direccion;


        $clientsUpdate->save();

        Alert::success('Operación realizada con éxito','¡Cliente editado!');

        return redirect()->route('clientes.index');

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientsDelete = Client::findOrFail($id);
		
        // $bitacorasDelete = new App\Bitacora;
        
        // $bitacorasDelete->user =  Auth::user()->name;
        // $bitacorasDelete->lastname =  Auth::user()->lastname;
        // $bitacorasDelete->role =  Auth::user()->role;
        // $bitacorasDelete->action = 'Ha eliminado una materia prima';
        // $bitacorasDelete->save();
                $clientsDelete->delete();
                Alert::success('Operación realizada con éxito','¡Cliente eliminado!');
        
                return redirect()->route('clientes.index');
    }
}

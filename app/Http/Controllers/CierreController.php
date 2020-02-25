<?php

namespace App\Http\Controllers;

use App\Cierre;
use Illuminate\Http\Request;
use DB;
use App\Bitacora;
use App\Dinero;
use App\Diario;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;


class CierreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cierre = Cierre::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('cierres.index', compact('cierre', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cierre = new Cierre;

        $cierre->b_punto            = $request->b_punto;
        $cierre->b_efectivo              = $request->b_efectivo;
        $cierre->d_efectivo             = $request->d_efectivo;

        $dinero = DB::select('SELECT * FROM dineros WHERE id = 1');
        $cierre->diario    =  $dinero[0]->dinero; 

        $cierre->save();


 
           
       //Sumar al dinero total
       
       $diario = DB::select('SELECT * FROM diarios WHERE id = 1');

      

       $sumarAldiario = $diario[0]->d_diario + $cierre->diario;

      
 
        $actualizardiario = Diario::find(1);
     
        $actualizardiario->d_diario = $sumarAldiario;
        
      
 
        $actualizardiario->save();
 
 

       //Reiniciar dinero diario a 0
       
       $dinero2 = DB::select('SELECT * FROM dineros WHERE id = 1');

      $reiniciarDinero = $dinero2[0]->dinero = 0;


       $actualizarDinero = Dinero::find(1);

       $actualizarDinero->dinero = $reiniciarDinero;

       $actualizarDinero->save();




        Alert::success('Operación realizada con éxito','¡Cierre realizado!');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cierre  $cierre
     * @return \Illuminate\Http\Response
     */
    public function show(Cierre $cierre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cierre  $cierre
     * @return \Illuminate\Http\Response
     */
    public function edit(Cierre $cierre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cierre  $cierre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cierre $cierre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cierre  $cierre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cierre $cierre)
    {
        //
    }
}

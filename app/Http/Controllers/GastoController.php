<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;
use DB;
use App\Bitacora;
use App\Dinero;
use App\Diario;

use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;


class GastoController extends Controller
{

    public function __construct(){
        $this->middleware('can:gastos.create')->only(['create', 'store']);
        $this->middleware('can:gastos.index')->only(['index']);
        $this->middleware('can:gastos.destroy')->only(['destroy']);
        $this->middleware('can:gastos.edit')->only(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::orderBy('id', 'DESC')->paginate();
        $i=1;

        return view('gastos.index', compact('gastos', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $diario = DB::select('SELECT * FROM diarios WHERE id = 1');

        $gasto = new Gasto;

        $gasto->razon            = $request->razon;
        $gasto->cantidad              = $request->cantidad;
        $gasto->descripcion             = $request->descripcion;
        $gasto->d_anterior              = $diario[0]->d_diario;

       //Actualizo el inventario
       
      

      $restarAlDinero = $diario[0]->d_diario - $request->cantidad;




       $actualizarDinero = Diario::find(1);

       $actualizarDinero->d_diario = $restarAlDinero;

       
       if ($actualizarDinero['d_diario'] < 0 ) {
        Alert::error('No puedes registrar un gasto mayor al dinero total de la empresa','¡Error en el registro!');
  
        return redirect()->route('gastos.index');
        die();
  }

  $gasto->save();
       $actualizarDinero->save();



       


        $bitacoras = new Bitacora;
       
        $bitacoras->user =  Auth::user()->name;
        $bitacoras->lastname =  Auth::user()->lastname;
        $bitacoras->action = 'Ha registrado un gasto';

        $bitacoras->save();

        Alert::success('Operación realizada con éxito','¡Gasto registrado!');

        return redirect()->route('gastos.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto $gasto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        //
    }
}

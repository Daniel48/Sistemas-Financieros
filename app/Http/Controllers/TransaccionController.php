<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaccion;
use DB;
class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $cuentas=DB::table('cuenta')
       ->join('cliente','cliente.nroCliente','=','cuenta.nroCliente')
       ->join('persona','persona.id','=','cliente.idCliente')
       ->where('cliente.tipo','=','P')
       ->select('persona.nombre as name','cuenta.nroCuenta as nc','persona.apellidoP as ap','persona.apellidoP as am')
       ->get();

       $monedas=DB::table('moneda')->get();
        return view('transacciones.create',compact('cuentas','monedas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //AUMENTAR EN LA BASE DE DATOS EN LA TABLA transaccion QUE SEA AUTOINCREMENT
    {


        $hoy=date("j/n/y");
        $transac=new transaccion();
        $transac->id=16; ///modificar la tabla transacciones
        $transac->fechaHora=$hoy;
        $transac->nroCuentaOr=$request->input('cliente1');

        $c1=DB::table('cuenta')
        ->where('cuenta.nroCuenta','=',$transac->nroCuentaOr)
        ->select('cuenta.saldo')
        ->get()->toArray();

        foreach($c1 as $c){
        if($c->saldo>$request->input('monto')){

        $transac->nroCuentaDest=$request->input('cliente2');
        $transac->monedaID=$request->input('moneda');
        $transac->monto=$request->input('monto');
        $transac->save();

        foreach($c1 as $c){
          DB::table('cuenta')
              ->where('nroCuenta',$transac->nroCuentaOr)
              ->update(['saldo' =>$c->saldo-$transac->monto]);
        }

        $c2=DB::table('cuenta')
        ->where('cuenta.nroCuenta','=',$transac->nroCuentaDest)
        ->select('cuenta.saldo')
        ->get()->toArray();

        foreach($c2 as $c){
          DB::table('cuenta')
              ->where('nroCuenta',$transac->nroCuentaDest)
              ->update(['saldo' =>$c->saldo+$transac->monto]);
        }

        DB::commit();
          return redirect()->route('transacciones.create')->with('info', 'Transaccion realizada exitosamente');

      }else{
          DB::rollback();
          return redirect()->route('transacciones.create')->with('status', 'Fallo saldo insuficiente');



        }

        }









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

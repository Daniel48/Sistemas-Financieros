<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cuenta;
class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes=DB::table('cliente')
      ->join('persona','persona.id','=','cliente.idCliente')
      ->where('cliente.tipo','=','P')
      ->select('cliente.nroCliente as nc','persona.ci as cedu','persona.nombre as name','persona.apellidoP as ap')
      ->get();
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $tipoC=DB::table('tipocuenta')->get();
      $moneda=DB::Table('moneda')->get();
      
      $clientes=DB::table('cliente')
      ->join('persona','persona.id','=','cliente.idCliente')
      ->where('cliente.tipo','=','P')
      ->select('cliente.nroCliente as nc','persona.ci as cedu','persona.nombre as name','persona.apellidoP as ap')
      ->get();

      return view('cuentas.create',compact('clientes','tipoC','moneda'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $hoy=date("j/n/y");
          $cuenta=new Cuenta();
          $cuenta->nroCuenta=$request->input('nroCuenta');
          $cuenta->nroCliente=$request->input('cliente');
          $cuenta->tipoCuentaID=$request->input('tipo');
          $cuenta->monedaID=$request->input('moneda');
          $cuenta->passwd=$request->input('password');
          $cuenta->Monto=$request->input('monto');
          $cuenta->fechaApertura=$hoy;
          $cuenta->save();
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

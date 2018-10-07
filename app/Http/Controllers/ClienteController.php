<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use App\Persona;
use App\Cliente;
use App\Empresa;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->save();


        if ($request->persona) {
            $persona = new Persona();
            $persona->id = 2;
            $persona->ci = $request->input('ci');
            $persona->nombre = $request->input('nombre');
            $persona->apellidoP = $request->input('p');
            $persona->apellidoM = $request->input('m');
            $persona->sexo = $request->input('sexo');
            $persona->fechaNac = $request->input('fecha');
            $persona->direccion = $request->input('direccion');
            $persona->save();

            $hoy = date("j/n/y");
            $cliente = new Cliente();
            $cliente->nroCliente = $input['email'];
            $cliente->idCliente = $persona->id;
            $cliente->tipo = 'P';
            $cliente->passwd = $input['password'];
            $cliente->fechaApertura = $hoy;
            $cliente->tipoClienteID = 1;
            $cliente->save();

        }

        if ($request->grupo) {

        }
        if ($request->empresa) {

            $empresa = new Empresa();
            $empresa->id = 1;
            $empresa->nit = $request->input('nit');
            $empresa->razonSocial = $request->input('razon');
            $empresa->Telefono = $request->input('telefono');
            $empresa->paginaWeb = $request->input('pagina');
            $empresa->ubicacion = $request->input('direccion');
            $empresa->save();

            $hoy = date("j/n/y");
            $cliente = new Cliente();
            $cliente->nroCliente = $input['email'];
            $cliente->idCliente = $empresa->id;
            $cliente->tipo = 'E';
            $cliente->passwd = $input['password'];
            $cliente->fechaApertura = $hoy;
            $cliente->tipoClienteID = 1;
            $cliente->save();

        }


        return redirect()->route('clientes.index')
            ->with('success', 'Persona registrada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privilegio;

class PrivilegioController extends Controller
{
  public function __construct(){

    $this->middleware('permission:privilegios.create')->only(['create','store']);
     $this->middleware('permission:privilegios.index')->only(['index']);
    $this->middleware('permission:privilegios.edit')->only(['edit','update']);
    $this->middleware('permission:privilegios.show')->only(['show']);
    $this->middleware('permission:privilegios.destroy')->only(['destroy']);


  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $permisos =Privilegio::paginate();
      return view('privilegios.index',compact('permisos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privilegios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $privilegios=new Privilegio();
        $privilegios->name=$request->input('name');
        $privilegios->slug=$request->input('slug');
        $privilegios->description=$request->input('description');
        $privilegios->save();
        return redirect()->route('privilegios.index');

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
    public function edit(Privilegio $privilegios)
    {
        
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

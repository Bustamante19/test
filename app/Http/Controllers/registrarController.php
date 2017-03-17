<?php

namespace App\Http\Controllers;

use App\registros;
use Illuminate\Http\Request;

class registrarController extends Controller
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
        $this -> validate ($request , [

            'nombre' => 'required',
            'interes' => 'required',
            'email' => 'required',
            'lugar_origen' => 'required',
            'tel_casa' => 'required',
            'tel_cel' => 'required',
            'esc_proc' => 'required',
            'no_esta' => 'required',
            'carr_1' => 'required',
            'carr_2' => 'required',
            'desea_inf' => 'required'
        ]);

        $registra = new registros;

        $registra -> nombre = $request -> nombre;
        $registra -> interes = $request -> interes;
        $registra -> email = $request -> email;
        $registra -> lugar_origen = $request -> lugar_origen;
        $registra -> tel_casa = $request -> tel_casa;
        $registra -> tel_cel = $request -> tel_cel;
        $registra -> esc_proc = $request -> esc_proc;
        $registra -> no_esta = $request -> no_esta;
        $registra -> carr_1 = $request -> carr_1;
        $registra -> carr_2 = $request -> carr_2;
        $registra -> desea_inf = $request -> desea_inf;

        $registra -> save();
      return redirect()-> route('/primero');
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

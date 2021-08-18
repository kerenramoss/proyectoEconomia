<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerHome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depto= \DB::select('SELECT * FROM departament');
        $tipe= \DB::select('SELECT * FROM Tipeofplace');
        $anuncios;
        if(request()-> depto){
            $anuncios=\DB::select('SELECT * FROM advert WHERE (tipeofplace = ? )', [depto]);
        }else{
            $anuncios=\DB::select('SELECT * FROM advert');
        }
        return view("Home.home")->with('depto',$depto)->with('tipe',$tipe)->with('add',$anuncios);
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
        //
    }
    public function anuncioDetalle($id)
    {
        $anuncio=\DB::select('SELECT * FROM advert WHERE id= ?',[$id]);
        $imagenes=\DB::select('SELECT * FROM listimagenes WHERE idadvert= ?',[$id]);
        foreach($anuncio as $a){
            $departament= $a->departament;
            $tipeofplace=$a->tipeofplace;
        }

        $depto=\DB::select('SELECT * FROM departament         WHERE id= ?',[$departament]);

        $tipe=\DB::select('SELECT * FROM tipeofplace WH   ERE id= ?',[$tipeofplace]);
        return view("Home.anunciodetalle")->with('anuncio',$anuncio)->with('depto',$depto)->with('tipe',$tipe)->with('imagenes',$imagenes);

    }

    /**
     * Display the specified resource.
             *
     *     @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("Home.anunciodetalle")->with('depto',$depto)->with('tipe',$tipe)->with('add',$anuncios);
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

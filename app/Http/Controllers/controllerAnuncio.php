<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
class controllerAnuncio extends Controller
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
        $idUser= \Cache::get('idUser');
        $depto= \DB::select('SELECT * FROM departament');
        $tipe= \DB::select('SELECT * FROM Tipeofplace');
        $anuncios=\DB::select('SELECT * FROM advert WHERE (iduser = ? )', [$idUser]);
        return view("Anuncios.create")->with('depto',$depto)->with('tipe',$tipe)->with('anuncios',$anuncios);
    }

    public function nuevo()
    {
        print("holaa");
        $idUser= \Cache::get('idUser');
        return view("Anuncios.nuevo")->with('idUser',$idUser);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $credential = [
            'imag'=>'required|max:500|string',
            'name'=>'required|max:150|string',
            'departament'=>'required',
            'tipeofplace'=>'required',
            'price'=>'required',
            'description'=>'required|max:150|string',

        ];


        $this->validate($request,$credential);


        $idepto=\DB::select('SELECT * FROM departament WHERE name=?',[$request ->departament]);
        $idtipe=\DB::select('SELECT * FROM Tipeofplace WHERE name=?',[$request ->tipeofplace]);
        foreach ($idepto as $dep){
            $idept= $dep -> id;

        }
        foreach ($idtipe as $idtypes){
            $idtip= $idtypes -> id;

        }



        \DB::table('advert')->insert([
            'name' => $request->name,
            'departament'=> $idept,
            'tipeofplace'=> $idtip,
            'imag'=> $request->imag,
            'price' => $request->price,
            'iduser' =>\Cache::get('idUser'),
            'description' => $request->description
        ]);


       $idUser= \Cache::get('idUser');
       $depto= \DB::select('SELECT * FROM departament');
       $tipe= \DB::select('SELECT * FROM Tipeofplace');
       $anuncios=\DB::select('SELECT * FROM advert WHERE (iduser = ? )', [$idUser]);
       return view("Anuncios.create")->with('depto',$depto)->with('tipe',$tipe)->with('anuncios',$anuncios);
    }
    public function anuncioDetalle($id)
    {
        $anuncio=\DB::select('SELECT * FROM advert WHERE id= ?',[$id]);
        $imagenes=\DB::select('SELECT * FROM listimagenes WHERE idadvert= ?',[$id]);
        foreach($anuncio as $a){
            $departament= $a->departament;
            $tipeofplace=$a->tipeofplace;
        }

        $depto=\DB::select('SELECT * FROM departament WHERE id= ?',[$departament]);

        $tipe=\DB::select('SELECT * FROM tipeofplace WHERE id= ?',[$tipeofplace]);
        return view("Home.anunciodetalle")->with('anuncio',$anuncio)->with('depto',$depto)->with('tipe',$tipe)->with('imagenes',$imagenes);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
  */
    public function show($id)
    {

        $depto=\DB::select('SELECT * FROM departament');
        $tipe= \DB::select('SELECT * FROM Tipeofplace');
        return view("Anuncios.nuevo")-> with ('depto',$depto,)-> with('tipe', $tipe);
      //  return view("Home.anunciodetalle")->with('depto',$depto)->with('tipe',$tipe)->with('add',$anuncios);
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

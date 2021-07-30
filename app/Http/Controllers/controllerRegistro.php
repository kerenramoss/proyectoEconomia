<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Seeder;

class ControllerRegistro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("RegistroArrendador.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        print($request); 
        $che=$request->filled("check");
        $credential = [
            'fistName'=>'required|max:150|string',
            'secondName'=>'required|max:150', 'string',
            'username'=>'required|max:150|string',
            'email'=>'required|max:150|email|unique:email|string',
            'password'=>'required|string',
            'passwordc'=>'required|same:password',
            'ckeck'=>'required|same:on',
        ];

       
        $this->validate($request,$credential);
        
        print_r($credential);
      
        $user = new User;
        $user->fistName=$request->fistName;
        $user->secondName=$request->secondName;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=password_hash($request->password,PASSWORD_BCRYPT);
        $user->idrol=2;  
        $user->save();

        return view("landigpage");
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class controllerLogin extends Controller
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
         return view("login.create"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       
        $credenti = [
            'email'=>'required|max:150|email|string',
            'password'=>'required|string',
        ];
      
         $email=$request->email;
        $password=$request->password;   
        
        $very= \DB::select('SELECT * FROM users WHERE (username = ? OR email=?)', [$email,$email]);
      if(count($very)==1){  
        if (Hash::check($password, $very[0]->password)) {
         $depto= \DB::select('SELECT * FROM departament');
         $tipe= \DB::select('SELECT * FROM Tipeofplace');
         return view("Home.home")->with('depto',$depto)->with('tipe',$tipe); 
        }
       
          else{
        
       throw ValidationException::withMessages([
           'credenciales'=>'las credenciales no son correctas',
            
       ]);
      }   $this->validate($request,$credenti);  
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

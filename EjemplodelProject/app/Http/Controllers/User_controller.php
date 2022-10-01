<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class User_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    {
            $usuario=new User();
            $usuario->name=$request->name;
            $usuario->email=$request->email;
            $usuario->nombre=$request->nombre;
            $usuario->apellido=$request->apellido;
            $usuario->direccion=$request->direccion;
            $usuario->password=$request->password;
            $usuario->save();
           // return response()->json(['mensaje'=>"Usuario registrado correctamente"]);
    }
    public function login(Request $request)
    {
        $usuario1=User::Where('password',$request->password);
        if($usuario1->name==$request->name)
        {
            if($usuario1->email=$request->email)
            {
                return response()->json(['mensaje'=>"Usuario correcto"]);
            }
            else
            {
                return response()->json(['mensaje'=>"Usuario incorrecto"]);
            }
        }
        
    }
    

    public function index()
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

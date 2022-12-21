<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user -> id_tipo_documento = $request -> id_tipo_documento;
        $user -> documento = $request -> documento;
        $user -> nombre = $request -> nombre;
        $user -> telefono = $request -> telefono;
        $user -> direccion = $request -> direccion;
        $user -> ciudad = $request -> ciudad;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);
        $user -> rol = $request -> rol;
        $user -> save();
        return $user;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user -> id_tipo_documento = $request -> id_tipo_documento;
        $user -> documento = $request -> documento;
        $user -> nombre = $request -> nombre;
        $user -> telefono = $request -> telefono;
        $user -> direccion = $request -> direccion;
        $user -> ciudad = $request -> ciudad;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> rol = $request -> rol;
        $user -> estado = $request -> estado;
        if (isset($request->password)){
            if(!empty($request->password)){
                $user -> password = Hash::make($request -> password);
            }
        }
        $user -> save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->estado = 0;
        $user->save();
    }

    public function login(LoginFormRequest $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],false)){
            $user = Auth::user();
            return $user;
        }else{
            return response()->json(['errors'=>['login'=>['Los datos no son validos']]]);
        }
    }
}

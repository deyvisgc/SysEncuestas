<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Input;
use SysEncuesta\Rol;
use SysEncuesta\User;

class PerfilController extends Controller
{

    public function index(){
        $id_tra = Auth::user()->idUsuario;
        $user=DB::select("SELECT * FROM usuario,rol WHERE idUsuario=$id_tra and usuario.Rol_idRol=rol.idRol LIMIT 1
");

        return view('Perfil.Perfil',['user'=>$user]);
    }
    public function show(){
        $id_tra = Auth::user()->idUsuario;
        $rol=Rol::all();
        $user=DB::select("SELECT * FROM usuario,rol WHERE idUsuario=$id_tra and usuario.Rol_idRol=rol.idRol LIMIT 1");
        return response()->json(array('user'=>$user,'rol'=>$rol));
    }
    public function update(Request  $request,$id){

        $user=User::find($id);
        $user->email=$request->user_Perfil;
        $user->Rol_idRol=$request->rol_Perfil;
        $user->nombre=$request->nombre;
        $user->Apellidos=$request->apellidos;
        $user->Telefono=$request->telefono;
        $user->DNI=$request->dni;
        $user->direccion=$request->direccion;
        $user->save();

        return response()->json(array("success"=>true));

    }
}

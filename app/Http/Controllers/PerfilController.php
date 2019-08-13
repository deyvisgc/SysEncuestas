<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
        $user=DB::select("SELECT * FROM usuario,rol WHERE idUsuario=$id_tra and usuario.Rol_idRol=rol.idRol LIMIT 1");
        return response()->json($user);
    }
}

<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use SysEncuesta\Rol;
use SysEncuesta\User;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use DB;

class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $rol=Rol::all();
        $use=DB::select("SELECT Usuario.Usuario,rol.Nombre_Rol,Usuario.idUsuario FROM Usuario,rol WHERE Usuario.Rol_idRol=rol.idRol");
        if($request->ajax()){
            return Datatables::of($use)->make(true);
        }
        return view('Admin.Usuario',['rol'=>$rol]);
    }
    public function show($id)
    {
        $libros =($id);
        return $libros;
    }
    public function store(Request $request){
        $user=new User();
        $user->Usuario=$request->usuarios;
        $user->password=bcrypt($request->password);
        if($user->imagen===null){
            if(Input::HasFile('imagen')){
                $file=Input::file('imagen');
                $file->move(public_path().'/Imagenes/Usuarios',$file->getClientOriginalName());
                $user->imagen=$file->getClientOriginalName();
            }
        } else{
            $user->imagen='descarga.png';
        }
        $user->Rol_idRol=$request->rol;
        $user->save();
        return response()->json(array("success"=>true));




    }

    public function edit($id){
        $rol=Rol::all();
        $user=DB::select("Select * from Usuario where  idUsuario=$id");
        $data=array('rol'=>$rol,'user'=>$user);
        return response()->json($data);

    }


    public function update(Request $request,$id){
        $user=User::find($id);
        $user->Usuario=$request->usuario_up;
        $user->Rol_idRol=$request->rol_update;
        $user->save();
        return response()->json(array("success"=>true));




    }
}

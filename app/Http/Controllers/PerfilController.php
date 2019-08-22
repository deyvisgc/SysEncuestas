<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Input;
use SysEncuesta\Rol;
use SysEncuesta\User;
use Response;
use Validator;
use Hash;

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
    public function canbiarpass(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        /**
         * si existe algun error en la validacion retorno a la vista perfil con el error y
        valido si las contraseñas son iguales la actual mas la existente. luego creo un new objeto  y le digo que me agarre solo el usuario que esta autoentificado  luego hago el update del password finalmente mando un error de validacion al perfil si es error o exito.
         *
         *
         */
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('Perfil')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                    ->update(['password' => bcrypt($request->password)]);
                return redirect('Perfil')->with('status', 'Password cambiado con éxito');
            }
            else
            {
                return redirect('Perfil')->with('message', 'Credenciales incorrectas');
            }
        }
    }
}

<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use SysEncuesta\Rol;
use SysEncuesta\User;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use DB;
use Validator;

class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $rol=Rol::all();
        $use=DB::select("SELECT Usuario.email,rol.Nombre_Rol,Usuario.idUsuario,CONCAT(usuario.nombre,' ',usuario.Apellidos) nombres,usuario.Telefono,usuario.DNI,usuario.direccion FROM Usuario,rol WHERE Usuario.Rol_idRol=rol.idRol and usuario.Rol_idRol=2 and usuario.estado_Delete=0");
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
    public function CanbiarEstado($id){

        $ro=DB::table('Usuario')
            ->where('idUsuario', $id)
            ->update(['estado_Delete' =>1]);
        return response()->json(array("success"=>true));


    }
    public function UsuariosDelete(Request $request){

        $use=DB::select("SELECT Usuario.email,rol.Nombre_Rol,Usuario.idUsuario,CONCAT(usuario.nombre,' ',usuario.Apellidos) nombres,usuario.Telefono,usuario.DNI,usuario.direccion FROM Usuario,rol WHERE Usuario.Rol_idRol=rol.idRol and usuario.Rol_idRol=2 and usuario.estado_Delete=1");
        if($request->ajax()){
            return Datatables::of($use)->make(true);
        }
        return view('Admin.UsuariosDelete');
    }
    public function store(Request $request){
        $user=new User();
        $user->email=$request->usuario;
        $user->password=bcrypt($request->password);
        if($user->imagen==null){
            if(Input::HasFile('foto')){
                $file = Input::file('foto');
                $file->move(public_path() . '/Imagenes/Usuario', $file->getClientOriginalName());
                $user->imagen = $file->getClientOriginalName();
            }
        } else{
            $user->imagen='descarga.jpg';
        }
        $user->Rol_idRol=$request->rol;
        $user->estado=2;
        $user->nombre=$request->nombre;
        $user->Apellidos=$request->apellidos;
        $user->Telefono=$request->telefono;
        $user->DNI=$request->dni;
        $user->direccion=$request->direccion;
        $user->estado_Delete=0;
        $user->save();
        return response()->json(array("success"=>true));




    }

    public function edit($id){
        $rol=Rol::all();
        $user=DB::select("Select * from usuario where  idUsuario=$id");
        $data=array('rol'=>$rol,'user'=>$user);
        return response()->json($data);

    }


    public function update(Request $request,$id){
        $user=User::find($id);
        $user->email=$request->usuario_up;
        $user->Rol_idRol=$request->rol_update;
        $user->save();
        return response()->json(array("success"=>true));




    }
    public function detalle($id){
     $detalle=DB::SELECT(
         "SELECT * from administrativa,adminmagistrado,subaministracion,areas_judiciales_apoyo, aspectos_generales_inmueble, aspectos_informaticos,aspectos_logisticos, aspectos_seguridad,auxilio_judicial,cobranzas_multas_certificados, cuerpos_delito_efectos,mobiliario, peritos_judiciales,personal, recaudacion_judicial, servicios_basicos,servicio_judiciales, 
          suministro_materiales, usuario WHERE administrativa.idMagiatradi=adminmagistrado.idMagistrados and administrativa.idsubAministracion=subaministracion.id_subAministracion
and administrativa.Usuario_idUsuario=usuario.idUsuario 
and areas_judiciales_apoyo.Usuario_idUsuario=usuario.idUsuario
and aspectos_generales_inmueble.Usuario_idUsuario=usuario.idUsuario 
and aspectos_informaticos.Usuario_idUsuario=usuario.idUsuario
and aspectos_logisticos.Usuario_idUsuario=usuario.idUsuario
and aspectos_seguridad.Usuario_idUsuario=usuario.idUsuario 
and auxilio_judicial.Usuario_idUsuario=usuario.idUsuario
and cobranzas_multas_certificados.Usuario_idUsuario=usuario.idUsuario
and cuerpos_delito_efectos.Usuario_idUsuario=usuario.idUsuario
and mobiliario.Usuario_idUsuario=usuario.idUsuario
and peritos_judiciales.Usuario_idUsuario=usuario.idUsuario
and personal.Usuario_idUsuario=usuario.idUsuario
and recaudacion_judicial.Usuario_idUsuario=usuario.idUsuario
and servicios_basicos.Usuario_idUsuario=usuario.idUsuario
and servicio_judiciales.Usuario_idUsuario=usuario.idUsuario
and suministro_materiales.Usuario_idUsuario=usuario.idUsuario
and usuario.idUsuario=$id");

     return response()->json($detalle);


    }
    public function CanbiarImagen(Request $request,$id){


        $regla=[
            'file'=>'required'
        ];
        $valida=Validator::make(Input::all(),$regla);
        if($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        }else{
            $user=User::find($id);
            $image_path="Imagenes/Usuario/$user->imagen";
            if(\File::exists(Public_path($image_path))){
                \File::delete(Public_path($image_path));
            }
            if(Input::HasFile('file')){
                $file=Input::file('file');
                $file->move(public_path().'/Imagenes/Usuario',$file->getClientOriginalName());
                $user->imagen=$file->getClientOriginalName();
            }
            $user->save();
            $data['succes']=true;
            $data['foto']=$user;
        }

        return response()->json($data);
    }

}

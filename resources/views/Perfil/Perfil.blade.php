@extends('Principal.principal')
@section('contenido')
    <style>

        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 70%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
    </style>


@foreach($user as $us)
                    @switch(true)
                        @case($us->Rol_idRol == 1)
                        <div class="container emp-profile">
                            <form id="ActualizarUser">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img">

                                            @if(Auth::user()->imagen=='')
                                                <img src="{{asset('descarga.jpg')}}" alt="" >
                                            @elseif(Auth::user()->imagen)
                                                <img src="{{asset('Imagenes/Usuario/'.Auth::user()->imagen)}}" alt="" >
                                            @endif
                                            <div class="file btn btn-lg btn-primary">
                                                Change Photo
                                                <input type="file" name="file"/>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-sm-6">
                                            <CENTER><span><h4 style="color:#286090;">PERFIL DEL ADMINISTRADOR</h4></span></CENTER>
                                            <center><span style="color:#0075b0";><p>Datos Personales y Credenciales</p></span></center>
                                        </div>
                                        <input type="hidden" id="iduser" value="{{$us->idUsuario}}">
                                        <div class="col-md-6">
                                            <input type="button" class="profile-edit-btn" id="ActualirPerfil" name="btnAddMore" value="editar Perfil"/>

                                        </div>
                                        <div class="clearfix"></div>
                                        <hr style="margin:5px 0 5px 0;">
                        <div class="col-sm-5 col-xs-6 tital " >NOMBRE:</div><div class="col-sm-7 col-xs-6 ">{{$us->nombre}}</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >APELLIDOS:</div><div class="col-sm-7">{{$us->Apellidos}}</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >USUARIO:</div><div class="col-sm-7">{{$us->email}}</div>
                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >ROL</div><div class="col-sm-7">{{$us->Nombre_Rol}}</div>

                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >tELEFONO:</div><div class="col-sm-7">{{$us->Telefono}}</div>

                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >DNI:</div><div class="col-sm-7">{{$us->DNI}}</div>

                        <div class="clearfix"></div>
                        <div class="bot-border"></div>

                        <div class="col-sm-5 col-xs-6 tital " >DIRECCION:</div><div class="col-sm-7">{{$us->direccion}}</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                </div>
                            </form>

                        </div>
                        @break
                        @case($us->Rol_idRol != 1)
                        <div class="container emp-profile">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img">

                                            @if(Auth::user()->imagen=='')
                                                <img src="{{asset('descarga.jpg')}}" alt="" >
                                            @elseif(Auth::user()->imagen)
                                                <img src="{{asset('Imagenes/Usuario/'.Auth::user()->imagen)}}" alt="" >
                                            @endif
                                            <div class="file btn btn-lg btn-primary">
                                                Change Photo
                                                <input type="file" name="file"/>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-sm-6">
                                            <CENTER><span><h4 style="color:#00b1b1;">PERFIL DE USUARIO</h4></span></CENTER>
                                            <center><span style="color:#0075b0";><p>Datos Personales y Credenciales</p></span></center>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="button" class="profile-edit-btn" name="btnAddMore" value="Editar Perfil"/>

                                        </div>
                                        <div class="clearfix"></div>
                                        <hr style="margin:5px 0 5px 0;">
                                        <div class="col-sm-5 col-xs-6 tital " >NOMBRE:</div><div class="col-sm-7 col-xs-6 ">{{$us->nombre}}</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >APELLIDOS:</div><div class="col-sm-7">{{$us->Apellidos}}</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >USUARIO:</div><div class="col-sm-7">{{$us->email}}</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >ROL</div><div class="col-sm-7">{{$us->Nombre_Rol}}</div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >tELEFONO:</div><div class="col-sm-7">{{$us->Telefono}}</div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >DNI:</div><div class="col-sm-7">{{$us->DNI}}</div>

                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>

                                        <div class="col-sm-5 col-xs-6 tital " >DIRECCION:</div><div class="col-sm-7">{{$us->direccion}}</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                </div>
                            </form>

                        </div>

                        @break

                    @endswitch
    @endforeach







@include('Perfil.EditarPerfil')
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#ActualirPerfil').click(function () {
                var id=$('#iduser').val();
                $.ajax({
                    url:'{{url('Perfil')}}/'+id,
                    type:'get',
                    dataType:'json',
                    success:function (response) {

                        $.each(response,function (index,val) {
                            alert(val.nombre);

                        })
                    }
                });

            })
        });
    </script>
    @endsection

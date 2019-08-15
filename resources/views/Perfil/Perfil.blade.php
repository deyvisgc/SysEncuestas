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
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-img">

                                            @if(Auth::user()->imagen=='')
                                                <img src="{{asset('descarga.jpg')}}" alt="" >
                                            @elseif(Auth::user()->imagen)
                                                <img src="{{asset('Imagenes/Usuario/'.Auth::user()->imagen)}}" alt="" >
                                            @endif
                                            <form id="frmCanbiarImagen"  enctype="multipart/form-data" >
                                                {{ csrf_field() }}
                                                <div class="file btn btn-lg btn-primary">
                                                    Change Photo
                                                    <input type="file" id="file"  onchange="canbiarfoto();" name="file"/>
                                                </div>
                                            </form>

                                        </div>


                                    </div>
                                    <div class="col-md-6"> <button style="margin-left: 500px;" type="button" id="ActualirPerfil" class="btn btn-success">Editar Perfil</button>
                                        <div class="col-sm-6">
                                            <CENTER><span><h4 style="color:#00b1b1;">PERFIL ADMINISTRATIVO</h4></span></CENTER>
                                            <center><span style="color:#0075b0";><p>Datos Personales y Credenciales</p></span></center>
                                            <input type="hidden" id="iduser" value="{{$us->idUsuario}}">
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
                                                <input type="file" id="imagen" name="file"/>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6"> <button style="margin-left: 500px;" type="button" id="ActualirPerfil" class="btn btn-warning">Editar Perfil</button>
                                        <div class="col-sm-6">
                                            <CENTER><span><h4 style="color:#00b1b1;">PERFIL DE USUARIO</h4></span></CENTER>
                                            <center><span style="color:#0075b0";><p>Datos Personales y Credenciales</p></span></center>
                                            <input type="hidden" id="iduser" value="{{$us->idUsuario}}">
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
        var id=$('#iduser').val();

            $('#ActualirPerfil').click(function () {
               var dd=$('#imagen').val();
               alert(dd);
                $.ajax({
                    url:'{{url('Perfil')}}/'+id,
                    type:'get',
                    dataType:'json',
                    success:function (response) {

                        $.each(response.user,function (index,val) {
                            $('#ActualizarPerfil').modal('show');
                            $('#user_Perfil').val(val.email);
                            $('#nombre_Perfil').val(val.nombre);
                            $('#apellidos_perfil').val(val.Apellidos);
                            $('#telefono_perfil').val(val.Telefono);
                            $('#dni_perfil').val(val.DNI);
                            $('#direccion_perfil').val(val.direccion);
                            $.each(response.rol,function (index,va) {
                                if(val.Rol_idRol===va.idRol){
                                    $("#rol_Perfil").append('<option value='+va.idRol+ '  selected >'+va.Nombre_Rol+ '</option>');
                                }else {
                                    $("#rol_Perfil").append('<option value='+va.idRol+ '  >'+va.Nombre_Rol+ '</option>');

                                }
                                $('#rol_Perfil').selectpicker('refresh');

                            })

                        });
                        $('#Actualizar').click(function (e) {
                          e.preventDefault();
                            var frm=$('#FormUpdatePerfil');

                            $.ajax({
                                url:'{{url('Perfil')}}/'+id,
                                type:'put',
                                dataType:'json',
                                data:frm.serialize(),
                                success:function (response) {
                                    if(response.success==true){
                                        iziToast.success({
                                            title: 'OK',
                                            message: 'Actualizado Registrado Correctamente!',
                                        });
                                        $('#ActualizarPerfil').modal('hide');
                                        frm.trigger('reset');
                                        setTimeout('document.location.reload()',6000);

                                    }
                                }
                            });
                        })

                    }
                });

            });

        $('body').on('hidden.bs.modal', '.modal', function () {
            $("#rol_Perfil").empty();

            /* document.location.reload();*/
        });

        function cambiar(){

            var pdrs = document.getElementById('imagen').files[0].name;
            document.getElementById('info').innerHTML = pdrs;
        }
        function canbiarfoto() {
            var id=$('#iduser').val();
            var form = document.getElementById('file');// You need to use standard javascript object here
            var file = form.files[0];
            var formData = new FormData();
            formData.append('file', file);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'{{url('CanbiarImagen')}}/'+id,
                data: formData,
                type: 'POST',
                cache: false,
                processData: false,
                contentType : false,
                success:function (index) {

                    iziToast.success({
                        title: 'OK',
                        message: 'Successfully Actualizado Correctamente!',
                    });

                    setTimeout(function(){
                     location.reload();
                    }, 2000);

                }

            });


        }

    </script>
    @endsection

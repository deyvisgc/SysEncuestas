@extends('Principal.principal')
@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h4 class="m-b-30 m-t-0">LISTA DE USUARIOS <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Nuevo</button> </h4>
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        </div>
                        <table id="tb_usuarios" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 168px;">Usuarios</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 252px;">Rol</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 118px;">Office</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RegisUsuarios -->
    <div class="modal fade update" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRAR USUARIOS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data" id="FormRegister">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Usuario</label>
                                <div class="col-sm-9">
                                    <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
                                </div>
                                <input type="hidden" name="idusuario"  class="form-control" id="idusuario" placeholder="Usuario">

                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" id="contra" class="col-sm-3 control-label">Contraseña</label>
                                <div class="col-sm-9"> <input type="password" name="password" class="form-control" id="password" placeholder="Password"></div>
                            </div>
                            <div class="form-group">
                                <label  id="imagen" for="file" class="col-sm-3 control-label">Imagen</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="file" name="file" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Rol</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="rol" name="rol">
                                        @foreach($rol as $r)
                                            <option value="{{$r->idRol}}">{{$r->Nombre_Rol}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="Registrar" class="btn btn-info">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!---update usuarios-->
    <div class="modal fade update" id="ActualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar USUARIOS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="form-horizontal" id="ActuRegister" >
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Usuario</label>
                                <div class="col-sm-9">
                                    <input type="text" name="usuario_up" class="form-control" id="usuario_up" placeholder="Usuario">
                                </div>
                                <input type="hidden" name="idusuario_up"  class="form-control" id="idusuario_up" placeholder="Usuario">

                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Rol</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="rol_update" name="rol_update">
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="Actualizar" class="btn btn-info actualizar">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@include('Admin.DetalleEncuesta')
    @endsection

@section('script')
<script>
    var tabla;
    $(document).ready(function () {

      tabla=  $('#tb_usuarios').dataTable({
            stateSave: true,
            responsive: true,
            processing: false,
            serverSide : true,
            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Ningún dato disponible en esta tabla",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
            },
            ajax: '{{url('Usuarios')}}',
            columns: [
                {data: 'Usuario', name: 'Usuario'},
                {data: 'Nombre_Rol', name: 'Nombre_Rol'},
                {"mRender": function ( data, type, row ) {
                        return '<a style="margin-left: 5px" class="btn btn-success btnEdit" data-edit="/Usuarios/'+row.idUsuario +'/edit" ><i class="fa fa-edit text-warning"></i></a>' +
                            '<a style="margin-left: 5px" class="btn btn-danger" data-delete="/Usuarios/'+row.idUsuario +'/delete" ><i class="fa fa-remove text-warning"></i></a>'+
                            '<a onclick="detalleEncuesta('+row.idUsuario +')" data-toggle="modal" data-target="#DetalleEncuesta" style="margin-left: 5px" class="btn btn-dark "><i class="fa fa-eye text-warning"></i></a>'

                    }
                },
            ]
        });
      $('#FormRegister').on('submit',function (e) {
          e.preventDefault();
          var data=$('#file').val();
          var frm=$('#FormRegister');
          alert(data);
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
              url:'{{url('Usuarios')}}',
              type:'post',
              dataType:'json',
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              success:function (response) {
                  if(response.success==true){
                      iziToast.success({
                          title: 'OK',
                          message: 'Successfully Registrado Correctamente!',
                      });
                      $('#exampleModal').modal('hide');
                      data.trigger('reset');
                      tabla.api().ajax.reload();

                  }
              }
          });
      });

        $('#tb_usuarios').on('click','.btnEdit[data-edit]',function(e){
            e.preventDefault();
            var url = $(this).data('edit');
            $.ajax({
                url : url,
                type : 'GET',
                datatype : 'json',
                success:function(response){
                    $.each(response.user,function (index,val) {
                        $('#ActualizarModal').modal('show');
                        $('#usuario_up').val(val.Usuario);
                        $('#idusuario_up').val(val.idUsuario);

                        $.each(response.rol,function (index,va) {
                            if(val.Rol_idRol===va.idRol){
                                $("#rol_update").append('<option value='+va.idRol+ '  selected >'+va.Nombre_Rol+ '</option>');
                            }else {
                                $("#rol_update").append('<option value='+va.idRol+ '  >'+va.Nombre_Rol+ '</option>');

                            }

                        })


                    });



                      hola();


                }

            })

        });

        /*$('#tb_usuarios').on('click','.btnshow[data-show]',function(e){
            e.preventDefault();
            var url = $(this).data('show');
            $.ajax({
                url : url,
                type : 'GET',
                datatype : 'json',
                success:function(response){
                    alert(response);


                }

            })

        });
*/
    });
    function hola() {
        $('#Actualizar').click(function (e) {
            var id=$('#idusuario_up').val();
            var frm=$('#ActuRegister');

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:'{{url('Usuarios')}}/'+id,
                type:'put',
                dataType:'json',
                data:frm.serialize(),
                success:function (response) {
                    if(response.success==true){
                        iziToast.success({
                            title: 'OK',
                            message: 'Actualizado Registrado Correctamente!',
                        });
                        $('#ActualizarModal').modal('hide');
                        frm.trigger('reset');
                        tabla.api().ajax.reload();

                    }
                }
            });

        });

    }
    $('body').on('hidden.bs.modal', '.modal', function () {
        $("#rol_update").empty();

        document.location.reload();
    });
       function detalleEncuesta(id) {
           $.ajax({
               url:'{{url('Detalle')}}/'+id,
               type:'get',
               dataType:'json',
               success:function (response) {

               }
           })
       }
    $(document).ready(function () {


        var fecha_programada=get_fhoy();
        var fecha_ejecucion=get_fhoy();
        $('#fecha_progra').val(fecha_programada);
        $('#fecha_ejecu').val(fecha_ejecucion);
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });

    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>
    @endsection

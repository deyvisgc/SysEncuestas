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

       /* document.location.reload();*/
    });
       function detalleEncuesta(id) {
         //  alert($('input:checkbox[name=colorfavorito]:checked').val());
           $.ajax({
               url:'{{url('Detalle')}}/'+id,
               type:'get',
               dataType:'json',
               success:function (response) {
                   $.each(response,function (index,val) {
                       $('#user').html(val.Usuario);
                       $('#Precidente_corte').val(val.Presidente_corte);
                       $('#Gerente_Administrativo').val(val.Gerente_Administrativo);
                       $('#Magistrado').val(val.magistrados);
                       $('#organo_judi').val(val.organo_judicial);
                       $('#direccion').val(val.Direccion);
                       $('#fecha_programacion').val(val.Fecha_Programacion);
                       $('#fecha_ejecucion').val(val.Fecha_Ejecucion);
                       //fin de listado administrativa
                       $('#personal_total').val(val.Personal_Total);
                       if (val.Regi_Trabajadores===1){

                           $("#dl_trabajador").prop('checked',true);

                        //   $('#dl_trabajador').val(val.Regi_Trabajadores,'checked',true);
                       }else if (val.Regi_Magistrado==2){
                              $("#dl_magistrado").prop('checked',true);

                           //   $('#dl_trabajador').val(val.Regi_Trabajadores,'ch
                        //   $('#dl_magistrado').val(val.Regi_Magistrado,'checked',true);
                       } else if (val.Regi_Trabajadores_1==3){
                           $("#dl_trabajadores1").prop('checked',true);

                          // $('#dl_trabajadores1').val(val.Regi_Trabajadores_1,'checked',true);
                       } else  if (val.Regis_Ftocheck==4){
                           $("#Fotocheck").prop('checked',true);

                        //   $('#Fotocheck').val(val.Regis_Ftocheck,'checked',true);
                       }

                       $('#observacion_1_Personal').val(val.Obersvaciones);
                       $('#observacion_2_Personal').val(val.Observaciones1);
                       //fin de listado personal
                       $('#Mesa_Partes_areas_apoyo_Deficiencias').val(val.Mesa_partes_Deficiencias);
                       $('#Mesa_Partes_areas_apoyo_Acciones').val(val.Mesa_partes_Accio);
                       $('#archivo_areas_apoyo_Deficiencias').val(val.Archivo_Jurisdicionales_Deficiencias);
                       $('#archivo_areas_apoyo_Acciones').val(val.Archivo_Juris_Accio);

                       $('#Notificaciones_areas_apoyo_Deficiencias').val(val.Notificaciones_Judiciales_Deficiencias);
                       $('#Notificaciones_areas_apoyo_Acciones').val(val.Notificaciones_Judiciales_Accio);

                       $('#Publicaciones_areas_apoyo_Deficiencias').val(val.Publicacion_Edictos_Deficiencias);
                       $('#Publicaciones_areas_apoyo_Archivos').val(val.Publicacion_Edictos_Accio);

                       $('#Convenio_reniec_areas_apoyo_Deficiencias').val(val.Convenio_Reniec_Deficiencias);
                       $('#Convenio_reniec_areas_apoyo_Acciones').val(val.Convenio_Reniec_Accio);

                       $('#Requisitorias_areas_apoyo_Deficiencias').val(val.Requesitos_Deficiencias);
                       $('#Requisitorias_areas_apoyo_Acciones').val(val.Requesitos_Accio);

                       $('#Otros_areas_apoyo_Deficiencias').val(val.Areas_judiciales_Otros_Deficiencias);
                       $('#Otros_areas_apoyo_Acciones').val(val.Areas_judiciales_Otros_Accio);

                       $('#subrasarse_areas_apoyo_Deficiencias').val(val.Areas_judiciales_Advertencia_Deficiencias);
                       $('#subrasarse_areas_apoyo_Acciones').val(val.Areas_judiciales_Advertencia_Accio);
                        //fin de listado de aspectos logisticlos-servicios terzeridos
                       $('#Mensajería_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Mensa_Defi);
                       $('#Mensajería_aspectos_logisticos_Acciones').val(val.Servi_Tercer_Mensa_Acci);
                       $('#Fotocopiado_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_fotocop_Defi);
                       $('#Fotocopiado_aspectos_logisticos_Acciones').val(val.Servi_Tercer_fotocop_Acci);

                       $('#Limpieza_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_linpieza_Defi);
                       $('#Limpieza_aspectos_logisticos_Acciones').val(val.Servi_Tercer_linpieza_Acci);
                       $('#Traducciones_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Traducc_Defi);
                       $('#Traducciones_aspectos_logisticos_Archivos').val(val.Servi_Tercer_Traducc_Acc);

                       $('#Publicaciones_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Publica_Defi);
                       $('#Publicaciones_aspectos_logisticos_Acciones').val(val.Servi_Tercer_Publica_Acc);
                       $('#Arrendamiento_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Arrenda_Defi);
                       $('#Arrendamiento_aspectos_logisticos_Acciones').val(val.Servi_Tercer_Arrenda_Acci);

                       $('#Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Manten_Defi);
                       $('#Mantenimiento_vehiculos_aspectos_logisticos_Acciones').val(val.Servi_Tercer_Manten_Acc);
                       $('#Otros_aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Otros_Defi);
                       $('#Otros_aspectos_logisticos_Acciones').val(val.Servi_Tercer_Otros_Acc);
                       $('#subrasarse_Aspectos_logisticos_Deficiencias').val(val.Servi_Tercer_Adverten_Defi);
                       $('#subrasarse_Aspectos_logisticos_Acciones').val(val.Servi_Tercer_Adverten_Acci);
                     //fin lista servicios   terciarios

                       $('#Energía_servicio_bascios_Deficiencias').val(val.Servi_Basi_Ener_Elec_Defi);
                       $('#Energía_servicio_bascios_Acciones').val(val.Servi_Basi_Ener_Elec_Acc);
                       $('#Agua_servicio_bascios_Deficiencias').val(val.Servi_Basi_Agua_Defi);
                       $('#Agua_servicio_bascios_Acciones').val(val.Servi_Basi_Agua_Acc);

                       $('#Telefonía_servicio_bascios_Deficiencias').val(val.Servi_Basi_Telefo_Inter_Defi);
                       $('#Telefonía_servicio_bascios_Acciones').val(val.Servi_Basi_Telefo_Inter_Acci);
                       $('#Otros_servicios_basicos_Deficiencias').val(val.Servi_Basi_Otros_Defi);
                       $('#Otros_servicios_basicos_Acciones').val(val.Servi_Basi_Otros_Acci);
                       $('#subrasarse_servicios_basicos_Deficiencias').val(val.Servi_Basi_Adver_Defi);
                       $('#subrasarse_servicios_basicos_Acciones').val(val.Servi_Basi_Adver_Acci);
                       //servicios basicos

                       $('#Armarios_mobiliario_Deficiencias').val(val.Mobi_Armarios_Archiva_Defi);
                       $('#Armarios_mobiliario_Acciones').val(val.Mobi_Armarios_Archiva_Acci);
                       $('#Estantería_mobiliario_Deficiencias').val(val.Mobi_Estanteria_Metalica_Defi);
                       $('#Estantería_mobiliario_Acciones').val(val.Mobi_Estanteria_Metalica_Acci);

                       $('#Escritorios_mobiliario_Deficiencias').val(val.Mobi_Escritorio_mesas_Defi);
                       $('#Escritorios_mobiliario_Acciones').val(val.Mobi_Escritorio_mesas_Acci);
                       $('#Sillas_mobiliario_Deficiencias').val(val.Mobi_sillas_sillones_Defi);
                       $('#Sillas_mobiliario_Archivos').val(val.Mobi_sillas_sillones_Acci);

                       $('#Módulos_computadoras_mobiliarios_Deficiencias').val(val.Mobi_Modulos_Defi);
                       $('#Módulos_computadoras_mobiliarios_Acciones').val(val.Mobi_Modulos_Acci);
                       $('#otros_mobiliario_Deficiencias').val(val.Mobi_Otros_Defi);
                       $('#otros_mobiliario_Acciones').val(val.Mobi_Otros_Acci);
                       $('#subrasarse_mobiliarios_Deficiencias').val(val.Advertencia_Mobiliario_Defi);
                       $('#subrasarse_mobiliarios_acciones').val(val.Advertencia_Mobiliario_Acci);
                       //fin lista mobiliarios

                       $('#Papel_suministro_Deficiencias').val(val.sumi_Papel_Defi);
                       $('#Papel_suministro_Acciones').val(val.sumi_Papel_Acci);
                       $('#Bolígrafos_suministro_Deficiencias').val(val.sumi_Boligrafos_Grapas_Defi);
                       $('#Bolígrafos_suministro_Acciones').val(val.sumi_Boligrafos_Grapas_Acci);

                       $('#Cinta_suministro_Deficiencias').val(val.Sumi_Cinta_Impresora_Defi);
                       $('#Cinta_suministro_Acciones').val(val.Sumi_Cinta_Impresora_Acci);
                       $('#Carátulas_suministro_Deficiencias').val(val.Sumi_Caratulas_Defi);
                       $('#Carátulas_suministro_Acciones').val(val.Sumi_Caratulas_Acci);

                       $('#Peruano_suministro_Deficiencias').val(val.Sumi_Peruano_Defi);
                       $('#Peruano_suministro_Archivos').val(val.Sumi_Peruano_Acci);
                       $('#Otros_suministro_Deficiencias').val(val.Sumi_Otros_Defi);
                       $('#Otros_suministro_Acciones').val(val.Sumi_Otros_Acci);

                       $('#subrasarse_suministro_Deficiencias').val(val.Sumi_Advertencia_Defi);
                       $('#subrasarse_suministro_Acciones').val(val.Sumi_Advertencia_Acci);
                       //fin lista sumunistro

                       $('#Computadoras_informaticos_Deficiencias').val(val.Aspect_Infor_Compu_Defi);
                       $('#Computadoras_informaticos__Acciones').val(val.Aspect_Infor_Compu_Acc);
                       $('#Impresoras_informaticos_Deficiencias').val(val.Aspect_infor_Impres_Defi);
                       $('#Impresoras_informaticos_Acciones').val(val.Aspect_infor_Impres_Acc);

                       $('#Fax_Informaticos_Deficiencias').val(val.Aspect_Infor_Fax_Defi);
                       $('#Fax_informaticos_Acciones').val(val.Aspect_Infor_Fax_Acc);
                       $('#Mantenimiento_equipos_Informaticos_Deficiencias').val(val.Aspect_Infor_Mante_Equi_Defi);
                       $('#Mantenimiento_equipos_Informaticos_Acciones').val(val.Aspect_Infor_Mante_Equi_Acci);

                       $('#UPS_Informaticos_Deficiencias').val(val.Aspect_Infor_Ups_Defi);
                       $('#UPS_Informaticos_Acciones').val(val.Aspect_Infor_Ups_Acc);
                       $('#supresor_picos_Informaticos_Deficiencias').val(val.Aspect_Infor_Supresor_Defi);
                       $('#supresor_picos_Informaticos_Acciones').val(val.Aspect_Infor_Supresor_Acc);

                       $('#Correo_Informaticos_Deficiencias').val(val.Aspect_Infor_correo_Defi);
                       $('#Correo_Informaticos_Acciones').val(val.Aspect_Infor_correo_Acc);
                       $('#sistemas_Informaticos_Deficiencias').val(val.Aspect_Sistemas_Informaticos);
                       $('#sistemas_Informaticos_Acciones').val(val.Aspect_Sistemas_Informaticos_Acc);

                       $('#Redes_Informáticos_Informaticos_Deficiencias').val(val.Aspect_Redes_Informaticos_Defi);
                       $('#Redes_Informáticos_Informaticos_Acciones').val(val.Aspect_Redes_Informaticos_Acc);
                       $('#Otros_Informaticos_Deficiencias').val(val.Aspect_Infor_Otros_Defi);
                       $('#Otros_Informaticos_Acciones').val(val.Aspect_Infor_Otros_Acc);
                       $('#subrasarse_Informaticos_Deficiencias').val(val.Aspect_Infor_Advert_Defi);
                       $('#subrasarse_Informaticos_Acciones').val(val.Aspect_Infor_Advert_Acc);
                       //fin lista aspectos informaticos

                       $('#Aspectos_seguridad_detectorM_Deficiencias').val(val.Aspecto_segu_Detectores_metal_Defi);
                       $('#Aspectos_seguridad_detectorM_Acciones').val(val.Aspecto_segu_Detectores_metal_Acc);

                       $('#Aspectos_seguridad_Extintores_Deficiencias').val(val.Aspecto_segu_Extintotores_Defi);
                       $('#Aspectos_seguridad_Extintores_Acciones').val(val.Aspecto_segu_Extintotores_Acc);

                       $('#Aspectos_seguridad_Mangueras_Deficiencias').val(val.Aspecto_segu_Mangueras_Defi);
                       $('#Aspectos_seguridad_Mangueras_Acciones').val(val.Aspecto_segu_Mangueras_Acc);

                       $('#Aspectos_seguridad_Otros_Deficiencias').val(val.Aspecto_segu_Otros_Defi);
                       $('#Aspectos_seguridad_Otros_Acciones').val(val.Aspecto_segu_Otros_Acc);

                       $('#subrasarse_Aspectos_seguridad_Deficiencias').val(val.Aspecto_Segu_Advertencia_Defi);
                       $('#subrasarse_Aspectos_seguridad_Acciones').val(val.Aspecto_Segu_Advertencia_Acc);

                       //fin lista aspectos de seguridad


                       $('#Aspectos_generales_Estructuras_Deficiencias').val(val.Aspec_Gene_Estructuras_Defi);
                       $('#Aspectos_generales_Estructuras_Acciones').val(val.Aspec_Gene_Estructuras_Acc);
                       $('#Aspectos_generales_Puertas_Deficiencias').val(val.Aspec_Gene_Puertas_Defi);
                       $('#Aspectos_generales_Puertas_Acciones').val(val.Aspec_Gene_Puertas_Acc);

                       $('#Aspectos_generales_Ventanas_Deficiencias').val(val.Aspect_Gene_Ventanas_Defi);
                       $('#Aspectos_generales_Ventanas_Acciones').val(val.Aspect_Gene_Ventanas_Acc);

                       $('#Aspectos_generales_Pisos_Deficiencias').val(val.Aspect_Gene_Pisos_Defi);
                       $('#Aspectos_generales_Pisos_Acciones').val(val.Aspect_Gene_Pisos_Acc);
                       $('#Aspectos_generales_Pintura_Deficiencias').val(val.Aspect_Gene_Pintura_Defi);
                       $('#Aspectos_generales_Pintura_Acciones').val(val.Aspect_Gene_Pintura_Acc);


                       $('#Aspectos_generales_Instalaciones_Sanitarias_Deficiencias').val(val.Aspect_Instalaciones_sanitarias_Defi);
                       $('#Aspectos_generales_Instalaciones_Sanitarias_Acciones').val(val.Aspect_Instalaciones_sanitarias_Acc);
                       $('#Aspectos_generales_Instalaciones_Eléctricas_Deficiencias').val(val.Aspect_Gene_Electricas_Defi);
                       $('#Aspectos_generales_Instalaciones_Eléctricas_Acciones').val(val.Aspect_Gene_Electricas_Acc);

                       $('#Aspectos_generales_brinda_Seguridad_Deficiencias').val(val.Aspect_Gene_Brinsa_Seguridad_Defi);
                       $('#Aspectos_generales_brinda_Seguridad_Acciones').val(val.Aspect_Gene_Brinsa_Seguridad_Acc);
                       $('#Aspectos_generales_Mantenimiento_local_Deficiencias').val(val.Aspect_Gene_manteni_local_defi);
                       $('#Aspectos_generales_Mantenimiento_local_Acciones').val(val.Aspect_Gene_manteni_local_Acci);

                       $('#Aspectos_generales_Otros_Deficiencias').val(val.Aspect_Gene_Otros_Defi);
                       $('#Aspectos_generales_Otros_Acciones').val(val.Aspect_Gene_Otros_Acc);
                       $('#subrasarse_Aspectos_generales_Deficiencias').val(val.Aspect_Gene_Advertencia_Difi);
                       $('#subrasarse_Aspectos_generales_Acciones').val(val.Aspect_Gene_Advertencia_Acc);

                       $('#Aspectos_generales_ALQUILADO').val(val.Aspect_Gene_Alquilado_1);
                       $('#Aspectos_generales_ALQUILADO1').val(val.Aspect_Gene_Alquilado_2);
                       $('#Aspectos_generales_ALQUILADO2').val(val.Aspect_Gene_Alquilado_3);

                       $('#Aspectos_generales_CEDIDO').val(val.Aspect_Gene_Cedido_1);
                       $('#Aspectos_generales_CEDIDO1').val(val.Aspect_Gene_Cedido_2);
                       $('#Aspectos_generales_CEDIDO2').val(val.Aspect_Gene_Cedido_3);

                       //fin lista servicios judiciales
                           if (val.Condicion_uno=='s'){
                               $('#servicio_judiciales_SI_1').val(val.Condicion_uno);
                           } else {
                               $('#servicio_judiciales_NO_1').val(val.Condicion_uno);
                           }
                               $('#servicio_judiciales_Observaciones_1').val(val.Condicion_uno_Observa);

                       if (val.Condicion_dos=='s'){
                           $('#servicio_judiciales_SI_2').val(val.Condicion_dos);
                       } else {
                           $('#servicio_judiciales_NO_2').val(val.Condicion_dos);
                       }
                       $('#servicio_judiciales_Observaciones_2').val(val.Condicion_dos_Observa);

                       if (val.Condicion_tres=='s'){
                           $('#servicio_judiciales_SI_3').val(val.Condicion_tres);
                       } else {
                           $('#servicio_judiciales_NO_3').val(val.Condicion_tres);
                       }
                       $('#servicio_judiciales_Observaciones_3').val(val.Condicion_tres_Observa);

                       if (val.Condicion_cuatro=='s'){
                           $('#servicio_judiciales_SI_4').val(val.Condicion_tres);
                       } else {
                           $('#servicio_judiciales_NO_4').val(val.Condicion_tres);
                       }
                       $('#servicio_judiciales_Observaciones_4').val(val.Condicion_cuatro_Observa);
                       $('#servicio_judiciales_respuesta_negativa').val(val.respuesta_negativa);
                       $('#servicio_judiciales_acciones1').val(val.Acciones_Adoptadas_uno);
                       $('#servicio_judiciales_acciones2').val(val.Acciones_Adoptadas_dos);
                       $('#servicio_judiciales_acciones3').val(val.Acciones_Adoptadoas_tres);
                       $('#servicio_judiciales_acciones4').val(val.Acciones_Adoptadas_cuatro);
                       $('#servicio_judiciales_acciones5').val(val.Acciones_Adoptadas_cinco);

                       //fin lista servicio Judicial

                       if(val.auxi_Judi_Condi_uno=='s'){
                           $('#auxilio_genereal_SI_1').val(val.auxi_Judi_Condi_uno);

                       }else {
                           $('#auxilio_genereal_NO_1').val(val.auxi_Judi_Condi_uno);
                       }
                       $('#auxilio_genereal_Observacaciones_1').val(val.auxi_Judi_Condici_uno_Observa);

                       if(val.auxi_Judi_Condici_dos=='s'){
                           $('#auxilio_genereal_SI_2_1').val(val.auxi_Judi_Condici_dos);

                       }else {
                           $('#auxilio_genereal_NO_2_1').val(val.auxi_Judi_Condici_dos);
                       }
                       $('#auxilio_genereal_Observaciones_2_1').val(val.auxi_Judi_Condici_dos_Observa);

                       if(val.Condici_dos_uno=='s'){
                           $('#auxilio_genereal_SI_2_2').val(val.Condici_dos_uno);

                       }else {
                           $('#auxilio_genereal_NO_2_2').val(val.Condici_dos_uno);
                       }
                       $('#auxilio_genereal_Observaciones_2_2').val(val.auxi_Judi_Condici_dos_uno_Observa);

                       if(val.auxi_Judi_Condici_tres=='s'){
                           $('#auxilio_genereal_SI_3').val(val.auxi_Judi_Condici_tres);

                       }else {
                           $('#auxilio_genereal_NO_3').val(val.auxi_Judi_Condici_tres);
                       }
                       $('#auxilio_genereal_Observaciones_3').val(val.auxi_Judi_Condici_tres_Observa);

                       if(val.auxi_Judi_Condici_cuatro=='s'){
                           $('#auxilio_genereal_SI_4').val(val.auxi_Judi_Condici_cuatro);

                       }else {
                           $('#auxilio_genereal_NO_4').val(val.auxi_Judi_Condici_cuatro);
                       }
                       $('#auxilio_genereal_Observaciones_4').val(val.auxi_Judi_Condici_cuatro_Observa);

                       if(val.auxi_Judi_Condici_cinco=='s'){
                           $('#auxilio_genereal_SI_5').val(val.auxi_Judi_Condici_cinco);

                       }else {
                           $('#auxilio_genereal_NO_5').val(val.auxi_Judi_Condici_cinco);
                       }
                       $('#auxilio_genereal_Observaciones_5').val(val.auxi_Judi_Condici_cinco_Observa);

                       if(val.auxi_Judi_Condici_seis=='s'){
                           $('#auxilio_genereal_SI_6').val(val.auxi_Judi_Condici_seis);

                       }else {
                           $('#auxilio_genereal_NO_6').val(val.auxi_Judi_Condici_seis);
                       }
                       $('#auxilio_genereal_Observaciones_6').val(val.auxi_Judi_Condici_seis_Observa);

                       $('#auxilio_genereal_Acciones_1').val(val.auxi_Judi_Acciones_uno);
                       $('#auxilio_genereal_Acciones_2').val(val.auxi_Judi_Acciones_dos);
                       $('#auxilio_genereal_Acciones_3').val(val.auxi_Judi_Acciones_tres);

                     //fin lista auxilio judicial

                       if(val.Peritos_Condicion_uno=='s'){
                           $('#Peritos_judiciales_SI_1').val(val.Peritos_Condicion_uno);
                       }else {
                           $('#Peritos_judiciales_NO_1').val(val.Peritos_Condicion_uno);

                       }
                       $('#Peritos_judiciales_Obserbaciones_1').val(val.Peritos_Condicion_uno_observa);

                       if(val.Peritos_Condicion_dos=='s'){
                           $('#Peritos_judiciales_SI_2_1').val(val.Peritos_Condicion_dos);
                       }else {
                           $('#Peritos_judiciales_NO_2_1').val(val.Peritos_Condicion_dos);

                       }
                       $('#Peritos_judiciales_Obserbaciones_1').val(val.Peritos_Condicion_dos_Observa);

                       if(val.Peritos_Condicion_dos_uno=='s'){
                           $('#Peritos_judiciales_SI_2_2').val(val.Peritos_Condicion_dos_uno);
                       }else {
                           $('#Peritos_judiciales_NO_2_2').val(val.Peritos_Condicion_dos_uno);

                       }
                       $('#Peritos_judiciales_Obserbaciones_2_2').val(val.Peritos_Condicion_dos_uno_Observa);

                       if(val.Peritos_Condicion_tres=='s'){
                           $('#Peritos_judiciales_SI_3').val(val.Peritos_Condicion_tres);
                       }else {
                           $('#Peritos_judiciales_NO_3').val(val.Peritos_Condicion_tres);

                       }
                       $('#Peritos_judiciales_Obserbaciones_3').val(val.Peritos_Condicion_tres_Observa);

                       if(val.Peritos_Condicion_cuatro=='s'){
                           $('#Peritos_judiciales_SI_4').val(val.Peritos_Condicion_cuatro);
                       }else {
                           $('#Peritos_judiciales_NO_4').val(val.Peritos_Condicion_cuatro);

                       }
                       $('#Peritos_judiciales_Obserbaciones_4').val(val.Peritos_Condicion_cuatro_Observa);


                       if(val.Peritos_Condicion_cinco=='s'){
                           $('#Peritos_judiciales_SI_5').val(val.Peritos_Condicion_cinco);
                       }else {
                           $('#Peritos_judiciales_NO_5').val(val.Peritos_Condicion_cinco);

                       }
                       $('#Peritos_judiciales_Obserbaciones_5').val(val.Peritos_Condicion_cinco_Observa);




                       if(val.Peritos_Condicion_seis=='s'){
                           $('#Peritos_judiciales_SI_6_1').val(val.Peritos_Condicion_seis);
                       }else {
                           $('#Peritos_judiciales_NO_6_1').val(val.Peritos_Condicion_seis);

                       }
                       $('#Peritos_judiciales_Obserbaciones_6_1').val(val.Peritos_Condicion_seis_Observa);

                       if(val.Peritos_Condicion_seis_uno=='s'){
                           $('#Peritos_judiciales_SI_6_2').val(val.Peritos_Condicion_seis_uno);
                       }else {
                           $('#Peritos_judiciales_NO_6_2').val(val.Peritos_Condicion_seis_uno);

                       }
                       $('#Peritos_judiciales_Obserbaciones_6_2').val(val.Peritos_Condicion_seis_uno_Observa);


                       if(val.Peritos_Condiciom_siete=='s'){
                           $('#Peritos_judiciales_SI_7').val(val.Peritos_Condiciom_siete);
                       }else {
                           $('#Peritos_judiciales_NO_7').val(val.Peritos_Condiciom_siete);

                       }
                       $('#Peritos_judiciales_Obserbaciones_7').val(val.Peritos_Condicion_siete_Observa);

                       $('#Peritos_judiciales_Acciones_1').val(val.Peritos_Acciones_uno);
                       $('#Peritos_judiciales_Acciones_2').val(val.Peritos_Acciones_dos);

                       //fin lista peritos judicial

                          if(val.Cuerpos_Condicion_uno=='s'){
                              $('#Cuerpo_delito_efectos_SI_1').val(val.Cuerpos_Condicion_uno);

                          }else {
                              $('#Cuerpo_delito_efectos_NO_1').val(val.Cuerpos_Condicion_uno);
                          }
                       $('#Cuerpo_delito_efectos_Observaciones_1').val(val.Cuerpos_Condicion_uno_Observa);

                       if(val.Cuerpos_Condicion_dos=='s'){
                           $('#Cuerpo_delito_efectos_SI_2_1').val(val.Cuerpos_Condicion_dos);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_2_1').val(val.Cuerpos_Condicion_dos);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_2_1').val(val.Cuerpos_Condicion_dos_Observa);

                       if(val.Cuerpos_Condicion_dos_uno=='s'){
                           $('#Cuerpo_delito_efectos_SI_2_2').val(val.Cuerpos_Condicion_dos_uno);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_2_2').val(val.Cuerpos_Condicion_dos_uno);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_2_2').val(val.Cuerpos_Condicion_dos_uno_Observa);
                       if(val.Cuerpos_Condicion_tres=='s'){
                           $('#Cuerpo_delito_efectos_SI_3').val(val.Cuerpos_Condicion_tres);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_3').val(val.Cuerpos_Condicion_tres);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_3').val(val.Cuerpos_Condicion_tres_Observa);

                       if(val.Cuerpos_Condiciones_cuatro=='s'){
                           $('#Cuerpo_delito_efectos_SI_4_1').val(val.Cuerpos_Condiciones_cuatro);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_4_1').val(val.Cuerpos_Condiciones_cuatro);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_4_1').val(val.Cuerpos_Condiciones_cuatro_Observa);


                       if(val.Cuerpos_Condiciones_cuatro_uno=='s'){
                           $('#Cuerpo_delito_efectos_SI_4_2').val(val.Cuerpos_Condiciones_cuatro);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_4_2').val(val.Cuerpos_Condiciones_cuatro);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_4_2').val(val.Cuerpos_Condiciones_cuatro_Observa);


                       if(val.Cuerpos_Condicion_cinco=='s'){
                           $('#Cuerpo_delito_efectos_SI_5').val(val.Cuerpos_Condicion_cinco);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_5').val(val.Cuerpos_Condicion_cinco);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_5').val(val.Cuerpos_Condicion_cinco_Observa);

                       if(val.Cuerpos_Condicion_cinco=='s'){
                           $('#Cuerpo_delito_efectos_SI_5').val(val.Cuerpos_Condicion_cinco);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_5').val(val.Cuerpos_Condicion_cinco);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_5').val(val.Cuerpos_Condicion_cinco_Observa);


                       if(val.Cuerpos_Condicion_Seis=='s'){
                           $('#Cuerpo_delito_efectos_SI_6').val(val.Cuerpos_Condicion_Seis);

                       }else {
                           $('#Cuerpo_delito_efectos_NO_6').val(val.Cuerpos_Condicion_Seis);
                       }
                       $('#Cuerpo_delito_efectos_Observaciones_6').val(val.Cuerpos_Condicion_Seis_Observa);

                       $('#Cuerpo_delito_efectos_ACCIONES_1').val(val.Cuerpos_Acciones_uno);
                       $('#Cuerpo_delito_efectos_ACCIONES_2').val(val.Cuerpos_Acciones_dos);
                       $('#Cuerpo_delito_efectos_ACCIONES_3').val(val.Cuerpos_Acciones_tres);

                       //fin lista cuerpo del delito
                       if(val.Recau_Comprobantes_pago=='s'){
                           $('#Recaudacion_judicial_SI_1').val(val.Recau_Comprobantes_pago);

                       }else {
                           $('#Recaudacion_judicial_NO_1').val(val.Recau_Comprobantes_pago);
                       }

                       if(val.Recau_Sello_Utilzada=='s'){
                           $('#Recaudacion_judicial_SI_1_1').val(val.Recau_Sello_Utilzada);

                       }else {
                           $('#Recaudacion_judicial_NO_1_1').val(val.Recau_Sello_Utilzada);
                       }

                       if(val.Recaudacion_judicial_SI_1_2=='s'){
                           $('#Recaudacion_judicial_SI_1_1').val(val.Recau_Sello_fechador);

                       }else {
                           $('#Recaudacion_judicial_NO_1_2').val(val.Recau_Sello_fechador);
                       }

                       if(val.Recau_Datos_Presenta=='s'){
                           $('#Recaudacion_judicial_SI_1_3').val(val.Recau_Datos_Presenta);

                       }else {
                           $('#Recaudacion_judicial_NO_1_3').val(val.Recau_Datos_Presenta);
                       }

                       if(val.Recaudacion_Cumplen_Prestar=='s'){
                           $('#Recaudacion_judicial_SI_1_4').val(val.Recaudacion_Cumplen_Prestar);

                       }else {
                           $('#Recaudacion_judicial_NO_1_4').val(val.Recaudacion_Cumplen_Prestar);
                       }

                       if(val.Recau_Sistema_Validacion=='s'){
                           $('#Recaudacion_judicial_S1_2').val(val.Recau_Sistema_Validacion);

                       }else {
                           $('#Recaudacion_judicial_NO_2').val(val.Recau_Sistema_Validacion);
                       }

                       if(val.Reca_Respuesta_Negativa=='s'){
                           $('#Recaudacion_judicial_S1_2_1').val(val.Reca_Respuesta_Negativa);

                       }else {
                           $('#Recaudacion_judicial_NO_2_1').val(val.Reca_Respuesta_Negativa);
                       }

                       if(val.Reca_Respuesta_Afirmativa=='s'){
                           $('#Recaudacion_judicial_S1_2_2').val(val.Reca_Respuesta_Negativa);

                       }else {
                           $('#Recaudacion_judicial_NO_2_2').val(val.Reca_Respuesta_Negativa);
                       }
                       if(val.Reca_Nota_Situacion=='s'){
                           $('#Recaudacion_judicial_S1_2_3').val(val.Reca_Respuesta_Negativa);

                       }else {
                           $('#Recaudacion_judicial_NO_2_3').val(val.Reca_Respuesta_Negativa);
                       }
                       $('#Recaudacion_judicial_periodicidad').val(val.recaud_judicial_Perio);
                       $('#Recaudacion_judicial_Oficio').val(val.recaud_judicial_Num_Ofici);
                       $('#Recaudacion_judicial_fecha').val(val.recaud_judicial_Fecha);

                       $('#Recaudacion_judicial_afirmativa_periodicidad').val(val.recaudacion_judicial_Afirma_Periodi);
                       $('#Recaudacion_judicial_afirmativa_Oficio').val(val.recauda_judicial_Afirma_Num_Oficio);
                       $('#Recaudacion_judicial_afirmativa_fecha').val(val.ecauda_judicial_Afirma_Fecha);


                       if(val.Recaudacion_Expedientes_fenecidos=='s'){
                           $('#Recaudacion_judicial_S1_3').val(val.Recaudacion_Expedientes_fenecidos);

                       }else {
                           $('#Recaudacion_judicial_NO_3').val(val.Recaudacion_Expedientes_fenecidos);
                       }

                       if(val.Recaudacion_Resp_Afirmativa=='s'){
                           $('#Recaudacion_judicial_S1_3_1').val(val.Recaudacion_Resp_Afirmativa);

                       }else {
                           $('#Recaudacion_judicial_NO_3_1').val(val.Recaudacion_Resp_Afirmativa);
                       }


                       if(val.Recaudacion_Nota_situcacion_3=='s'){
                           $('#Recaudacion_judicial_S1_3_2').val(val.Recaudacion_Nota_situcacion_3);

                       }else {
                           $('#Recaudacion_judicial_NO_3_2').val(val.Recaudacion_Nota_situcacion_3);
                       }

                       if(val.Reca_Cumplen_Verificar=='s'){
                           $('#Recaudacion_judicial_S1_4').val(val.Reca_Cumplen_Verificar);

                       }else {
                           $('#Recaudacion_judicial_NO_4').val(val.Reca_Cumplen_Verificar);
                       }
                       if(val.Reca_Presentase_Aranceles_Judiciales=='s'){
                           $('#Recaudacion_judicial_S1_4_1').val(val.Reca_Presentase_Aranceles_Judiciales);

                       }else {
                           $('#Recaudacion_judicial_NO_4_1').val(val.Reca_Presentase_Aranceles_Judiciales);
                       }

                       if(val.Reca_Presentacion_Derechos_Notificacion=='s'){
                           $('#Recaudacion_judicial_SI_5').val(val.Reca_Presentacion_Derechos_Notificacion);

                       }else {
                           $('#Recaudacion_judicial_NO_5').val(val.Reca_Presentacion_Derechos_Notificacion);
                       }
                       //fin lista recaudacion judicial

                       if(val.Condicion_uno_Libro_Registros=='s'){
                           $('#Cobransas_certificados_SI_1').val(val.Condicion_uno_Libro_Registros);

                       }else {
                           $('#Cobransas_certificados_NO_1').val(val.Condicion_uno_Libro_Registros);
                       }

                       if(val.Condicion_uno_Respuesta_Afirmativa=='s'){
                           $('#Cobransas_certificados_SI_1_1').val(val.Condicion_uno_Respuesta_Afirmativa);

                       }else {
                           $('#Cobransas_certificados_NO_1_1').val(val.Condicion_uno_Respuesta_Afirmativa);
                       }
                       if(val.Condicion_dos_Respuesta_Negativa=='s'){
                           $('#Cobransas_certificados_SI_2').val(val.Condicion_dos_Respuesta_Negativa);

                       }else {
                           $('#Cobransas_certificados_N0_2').val(val.Condicion_dos_Respuesta_Negativa);
                       }

                       if(val.Condicion_dos_Ultimos_Meses=='s'){
                           $('#Cobransas_certificados_SI_2_1').val(val.Condicion_dos_Ultimos_Meses);

                       }else {
                           $('#Cobransas_certificados_N0_2_1').val(val.Condicion_dos_Ultimos_Meses);
                       }

                       if(val.Condicion_Dos_A=='s'){
                           $('#Cobransas_certificados_SI_2_2').val(val.Condicion_Dos_A);

                       }else {
                           $('#Cobransas_certificados_N0_2_2').val(val.Condicion_Dos_A);
                       }

                       if(val.Condicion_Dos_B=='s'){
                           $('#Cobransas_certificados_SI_2_3').val(val.Condicion_Dos_B);

                       }else {
                           $('#Cobransas_certificados_N0_2_3').val(val.Condicion_Dos_B);
                       }

                       if(val.Condicion_Dos_C=='s'){
                           $('#Cobransas_certificados_SI_2_4').val(val.Condicion_Dos_C);

                       }else {
                           $('#Cobransas_certificados_N0_2_4').val(val.Condicion_Dos_C);
                       }

                       if(val.Condicion_Dos_D=='s'){
                           $('#Cobransas_certificados_SI_2_5').val(val.Condicion_Dos_D);

                       }else {
                           $('#Cobransas_certificados_N0_2_5').val(val.Condicion_Dos_D);
                       }

                       if(val.Condicion_tres_Precidencia_corte=='s'){
                           $('#Cobransas_certificados_SI_3').val(val.Condicion_tres_Precidencia_corte);

                       }else {
                           $('#Cobransas_certificados_NO_3').val(val.Condicion_tres_Precidencia_corte);
                       }
                       if(val.Condicion_tres_Cargo_Remision=='s'){
                           $('#Cobransas_certificados_SI_3_1').val(val.Condicion_tres_Cargo_Remision);

                       }else {
                           $('#Cobransas_certificados_NO_3_1').val(val.Condicion_tres_Cargo_Remision);
                       }

                       if(val.Condicion_tres_Nota=='s'){
                           $('#Cobransas_certificados_SI_3_2').val(val.Condicion_tres_Nota);

                       }else {
                           $('#Cobransas_certificados_NO_3_2').val(val.Condicion_tres_Nota);
                       }
                       if(val.Condicion_cuatro=='s'){
                           $('#Cobransas_certificados_SI_4').val(val.Condicion_cuatro);

                       }else {
                           $('#Cobransas_certificados_NO_4').val(val.Condicion_cuatro);
                       }
                       if(val.Condicion_sinco=='s'){
                           $('#Cobransas_certificados_SI_5').val(val.Condicion_sinco);

                       }else {
                           $('#Cobransas_certificados_NO_5').val(val.Condicion_sinco);
                       }
                       if(val.Condicion_seis=='s'){
                           $('#Cobransas_certificados_SI_6').val(val.Condicion_sinco);

                       }else {
                           $('#Cobransas_certificados_NO_6').val(val.Condicion_sinco);
                       }

                       $('#Cobransas_certificados_ACCIONES_1').val(val.Cobranza_acciones_uno);
                       $('#Cobransas_certificados_ACCIONES_2').val(val.Cobranzas_acciones_dos);
                       $('#Cobransas_certificados_ACCIONES_3').val(val.Cobranzas_acciones_tres);
                   })
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

@extends('Principal.principal')
@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <h4 class="m-b-30 m-t-0">BANDEJA DE USUARIOS ELIMINADOS <i class="fas fa-user-times text-danger text-lg" style='font-size:48px;'></i></h4>
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    </div>
                    <div class="table-responsive">
                        <table id="tb_usuarios_Delete" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Nombres</th>
                                <th >Usuario</th>
                                <th >Rol</th>
                                <th >Telefono</th>
                                <th>Dni</th>
                                <th >Direccion</th>
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
    </div>
    @endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#tb_usuarios_Delete').dataTable({
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
                ajax: '{{url('UsuariosDelete')}}',
                columns: [
                    {data: 'nombres', name: 'nombres'},
                    {data: 'email', name: 'email'},
                    {data: 'Nombre_Rol', name: 'Nombre_Rol'},
                    {data: 'Telefono', name: 'Telefono'},
                    {data: 'DNI', name: 'DNI'},
                    {data: 'direccion', name: 'direccion'}

                ]
            });


        });
    </script>
    @endsection


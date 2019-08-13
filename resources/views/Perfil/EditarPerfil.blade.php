<div class="modal fade update" id="ActualizarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR PERFIL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs navtab-bg col-lg-12">
                            <li class="active">
                                <a title="Usuarios" href="#home" data-toggle="tab" aria-expanded="true">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs" ><i class="glyphicon glyphicon-user"></i></span>
                                </a>
                            </li>
                            <li class="">
                                <a title="Datos Personales"  href="#profile" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs"><i class="glyphicon glyphicon-credit-card"></i></span>
                                </a>
                            </li>

                        </ul>
                        <form class="form-horizontal"  accept-charset="UTF-8" enctype="multipart/form-data" id="FormUpdatePerfil"><br><br><br>

                            <div class="tab-content" style="width: 100%" >

                                <div class="tab-pane active" id="home">
                                    <h4 style="text-align: center">Credenciales de Iniciar Sesion</h4><br>

                                    @csrf
                                    <div class="form-group" >
                                        <label for="inputEmail3" class="col-sm-3 control-label">Usuario</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="user_Perfil" class="form-control" id="user_Perfil" placeholder="Escriba aqui....">
                                        </div>
                                        <input type="hidden" name="idusuario"  class="form-control" id="idusuario" placeholder="Usuario">

                                    </div>

                                    <div class="form-group" >
                                        <label for="inputPassword4" class="col-sm-3 control-label">Rol</label>
                                        <div class="col-sm-7">
                                            <select class="selectpicker form-control" id="rol_Perfil" name="rol_Perfil" data-live-search="true">
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="profile"><br>
                                    <h4 style="text-align: center">DATOS PERSONALES</h4><br>

                                    <div class="form-group"  >
                                        <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nombre" class="form-control" id="nombre_Perfil" placeholder="Escriba aqui....">
                                        </div>


                                    </div>
                                    <div class="form-group" >
                                        <label for="inputPassword3" id="contra" class="col-sm-3 control-label">Apellidos</label>
                                        <div class="col-sm-7"> <input type="text" name="apellidos" class="form-control" id="apellidos_perfil" placeholder="Escriba aqui...."></div>
                                    </div>
                                    <div class="form-group"  >
                                        <label for="inputPassword3" id="contra" class="col-sm-3 control-label">Telefono</label>
                                        <div class="col-sm-7"> <input type="number" name="telefono" class="form-control" id="telefono_perfil" placeholder="Escriba aqui...."></div>
                                    </div>
                                    <div class="form-group" >
                                        <label for="inputPassword3" id="contra" class="col-sm-3 control-label">Dni</label>
                                        <div class="col-sm-7"> <input type="number" name="dni" class="form-control" id="dni_perfil" placeholder="Escriba aqui...."></div>
                                    </div>
                                    <div class="form-group" >
                                        <label for="inputPassword3" id="contra" class="col-sm-3 control-label">Direccion</label>
                                        <div class="col-sm-7"> <input type="text" name="direccion" class="form-control" id="direccion_perfil" placeholder="Escriba aqui...."></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" id="Actualizar" class="btn btn-success">Actualizar</button>
                                    </div>



                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

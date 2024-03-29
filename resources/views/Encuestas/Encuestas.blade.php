
@extends('Principal.principal')
@section('contenido')

<style>
    .texto_3d {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 25px;
        font-weight: bold;
        color: #0b2e13;

        text-shadow: 0 1px 0 #ccc,
        0 2px 0 #c9c9c9,
        0 3px 0 #bbb,
        0 4px 0 #b9b9b9,
        0 5px 0 #aaa,
        0 6px 1px rgba(0, 0, 0, .1),
        0 0 5px rgba(0, 0, 0, .1),
        0 1px 3px rgba(0, 0, 0, .3),
        0 3px 5px rgba(0, 0, 0, .2),
        0 5px 10px rgba(0, 0, 0, .25),
        0 10px 10px rgba(0, 0, 0, .2),
        0 20px 20px rgba(0, 0, 0, .15) ;
    }
</style>


        @foreach($cobran as $d)
            @switch(true)
                @case($d->estado == 2)
                <div class="container">
                    <div class="row">
                        <section>
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Poder Judicial">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Personal">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="ASPECTOS INFORMATICOS">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="PERITOS JUDICIALES.">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form" id="regisEncuestas">
                                    @csrf
                                    <input type="hidden" id="iduser" name="iduser" value=" {{ Auth::user()->idUsuario }}">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="col-lg-12" style="width: 100%;height: auto">
                                                <div class="panel panel-color panel-success">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">PODER JUDICIAL</h3>
                                                    </div><div class="panel-body">
                                                        <div class="col-12">
                                                            <center><h2>PODER JUDICIAL</h2></center><br>
                                                            <center><h4>CORTE SUPERIOR DE JUSTICIA DE SAN MARTIN</h4></center><br>
                                                            <center><h3>VISITAS ADMINISTRATIVAS DISTRITALES</h3></center><br>
                                                            <form class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data" id="FormRegister">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">Presidente de Corte <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="Precidente_corte" value="Dr. José Antonio Vargas Martínez." class="form-control" readonly id="Precidente_corte" >
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Gerente Administrativo  <label>:</label></label>
                                                                    <div class="col-sm-9"> <input type="text" name="Gerente_Administrativo" readonly value="Lic. Freddy Díaz Castillo" class="form-control" id="Gerente_Administrativo" ></div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">Magistrado <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <select class="selectpicker form-control" id="magis" name="magis" data-live-search="true">
                                                                            <option data-tokens="ketchup mustard" value="" disabled selected>SELECCIONAR MAGISTRADO</option>
                                                                            @foreach($magistrados as $ma)
                                                                                <option value="{{$ma->idMagistrados}}">{{$ma->magistrados}}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">Órgano Jurisdiccional <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <select class="selectpicker form-control " id="organo_judicial"   name="organo_judicial"  data-live-search="true" ata-width="100%">
                                                                        </select>

                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Dirección  <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="direccion"  placeholder="Escribia aqui.." class="form-control" id="direccion"  onkeyup="validacion('direccion');">
                                                                        <span class="help-block"></span>
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Fecha de programación  <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="fecha_progra"  placeholder="Escribia aqui.." class="form-control" id="fecha_progra"onkeyup="validacion('fecha_progra');" >
                                                                        <span class="help-block"></span>
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="form-group">
                                                                    <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Fecha de Ejecución <label>:</label></label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="fecha_ejecu"  placeholder="Escribia aqui.." class="form-control" id="fecha_ejecu" onkeyup="validacion('fecha_ejecu');" >
                                                                        <span class="help-block"></span>
                                                                    </div>

                                                                </div>



                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>


                                                <ul class="list-inline pull-right">
                                                    <li><button id="valida" type="button" class="btn btn-primary next-step">Next</button></li>
                                                </ul>
                                            </div>


                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2">

                                            <div class="panel panel-color panel-success">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal</h3>
                                                </div><div class="panel-body">
                                                    <div class="col-12"style="width: 80%;height: auto">
                                                        <p style="margin-left: 10px;">Indicar número de trabajadores (incluyendo al Magistrado) que laboran en el órgano jurisdiccional
                                                            visitado.</p>
                                                        <br>
                                                        <form class="form-horizontal" id="regisPersona">
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">PERSONAL TOTAL:</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" name="personal_total" style="margin-right: 10px;"  class="form-control"  id="personal_total" onkeyup="validacion('personal_total');" placeholder="Escribia aqui.." >
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <br>

                                                        <h5 style="margin-left: 10px;">Detallar régimen que lo regula su cantidad y si cuentan con Fotocheck</h5>

                                                        <label style="color: black" class="radio-inline"></label>

                                                        <label style="margin-left: 15px;">Trabajadores: <div  class="checkbox checkbox-success checkbox-circle" >
                                                                <input id="checkbox7" value="1" name="DL_728_Trabajador" type="checkbox">
                                                                <label for="checkbox7"> DL 728 fijo</label>

                                                            </div>
                                                        </label>
                                                        <label style="color: black" class="radio-inline"></label>

                                                        <label style="margin-left: 15px;">Magistrados: <div  class="checkbox checkbox-success checkbox-circle" >
                                                                <input id="checkbox7" value="2" name="DL_276_Magistrado" type="checkbox">
                                                                <label for="checkbox7"> DL_276</label>

                                                            </div>
                                                        </label>
                                                        <label style="color: black" class="radio-inline"></label>

                                                        <label style="margin-left: 15px;">Trabajadores: <div  class="checkbox checkbox-success checkbox-circle" >
                                                                <input id="checkbox7" value="3" name="DL_1057_Trabajador_1" type="checkbox">
                                                                <label for="checkbox7"> DL 728 fijo</label>

                                                            </div>
                                                        </label>
                                                        <label style="margin-left: 15px;">Fotocheck: <div  class="checkbox checkbox-success checkbox-circle" >
                                                                <input id="Fotocheck"  readonly value="4"   name="Fotocheck" type="checkbox">
                                                                <label for="checkbox7"> Cuentan con Fotocheck</label>

                                                            </div>
                                                        </label>


                                                        <h4 style="margin-left: 15px;" >OBSERVACION</h4>
                                                        <h6 style="margin-left: 20px;">ACCIONES QUE LA ADMINISTRACIÓN DE LA CORTE ADOPTA PARA SUBSANAR LA(S) DEFICIENCIA (S) ENCONTRADA (S): INDICAR PLAZO</h6><br>
                                                        <form class="form-horizontal" id="form_personal_Observaciones">
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">1:</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="observacion_1_Personal" style="margin-right: 10px;"  class="form-control"  onkeyup="validacion('observacion_1_Personal');"  id="observacion_1_Personal" placeholder="Escribia aqui.." >
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">2:</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="observacion_2_Personal" style="margin-right: 10px;"  class="form-control" onkeyup="validacion('observacion_2_Personal');" id="observacion_2_Personal" placeholder="Escribia aqui.." >
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="panel panel-color panel-dark">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">ÁREAS DE APOYO JUDICIAL</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;" width="30%";>AREA/ DEPENDENCIA</th>
                                                                        <th style="padding-bottom: 50px;" width="30%;">Deficiencias Identificadas</th>
                                                                        <th style="padding-bottom: 20px;" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Mesa de Partes o Centro de Distribución General</textarea></td>
                                                                            <td>
                                                                                <div class="">
                                                                                      <textarea class="form-control"  rows="2" id="Mesa_Partes_areas_apoyo_Deficiencias" onkeyup="validacion('Mesa_Partes_areas_apoyo_Deficiencias');"  name="Mesa_Partes_areas_apoyo_Deficiencias"  style="color: black;font-weight: bold;" >

                                                                                </textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                            </td>
                                                                            <td>
                                                                                <div class="">
                                                                                     <textarea class="form-control"  rows="2" id="Mesa_Partes_areas_apoyo_Acciones" onkeyup="validacion('Mesa_Partes_areas_apoyo_Acciones');"  name="Mesa_Partes_areas_apoyo_Acciones"  style="color: black;font-weight: bold;" >

                                                                                </textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Archivo Jurisdiccional" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                               <div class="">
                                                                                   <input type="text" class="form-control" id="archivo_areas_apoyo_Deficiencias" onkeyup="validacion('archivo_areas_apoyo_Deficiencias');" name="archivo_areas_apoyo_Deficiencias"  />
                                                                                   <span class="help-block"></span>
                                                                               </div>
                                                                            </td>

                                                                            <td>
                                                                            <div class="">
                                                                                <input type="text" class="form-control" id="archivo_areas_apoyo_Acciones" onkeyup="validacion('archivo_areas_apoyo_Acciones');" name="archivo_areas_apoyo_Acciones"  />
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Notificaciones Judiciales"style="color: black;font-weight: bold;" /></td>

                                                                                <td>
                                                                                    <div class="">
                                                                                    <input type="text" class="form-control" id="Notificaciones_areas_apoyo_Deficiencias" name="Notificaciones_areas_apoyo_Deficiencias" onkeyup="validacion('Notificaciones_areas_apoyo_Deficiencias');" />
                                                                                <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control" id="Notificaciones_areas_apoyo_Acciones" name="Notificaciones_areas_apoyo_Acciones"  onkeyup="validacion('Notificaciones_areas_apoyo_Acciones')"/>
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Publicación de Edictos" style="color: black;font-weight: bold;" /></td>

                                                                                <td>
                                                                                    <div >
                                                                                        <input type="text" class="form-control"  id="Publicaciones_areas_apoyo_Deficiencias" onkeyup="validacion('Publicaciones_areas_apoyo_Deficiencias')"  name="Publicaciones_areas_apoyo_Deficiencias" />
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div >
                                                                                    <input type="text" class="form-control" id="Publicaciones_areas_apoyo_Archivos"  onkeyup="validacion('Publicaciones_areas_apoyo_Archivos')" name="Publicaciones_areas_apoyo_Archivos"  />
                                                                                    <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Convenio – RENIEC" style="color: black;font-weight: bold;"  /></td>

                                                                                <td>
                                                                                    <div>
                                                                                        <input type="text" class="form-control" id="Convenio_reniec_areas_apoyo_Deficiencias" onkeyup="validacion('Convenio_reniec_areas_apoyo_Deficiencias')" name="Convenio_reniec_areas_apoyo_Deficiencias"/>
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control" id="Convenio_reniec_areas_apoyo_Acciones" onkeyup="validacion('Convenio_reniec_areas_apoyo_Acciones')" name="Convenio_reniec_areas_apoyo_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Requisitorias"style="color: black;font-weight: bold;" /></td>

                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control" id="Requisitorias_areas_apoyo_Deficiencias" onkeyup="validacion('Requisitorias_areas_apoyo_Deficiencias')" name="Requisitorias_areas_apoyo_Deficiencias" />
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>

                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control"  id="Requisitorias_areas_apoyo_Acciones" onkeyup="validacion('Requisitorias_areas_apoyo_Acciones')" name="Requisitorias_areas_apoyo_Acciones"/>
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>



                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Otros." style="color: black;font-weight: bold;" /></td>

                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control"  id="Otros_areas_apoyo_Deficiencias"  onkeyup="validacion('Otros_areas_apoyo_Deficiencias')" name="Otros_areas_apoyo_Deficiencias" />
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>


                                                                                <td>
                                                                                    <div>
                                                                                    <input type="text" class="form-control" id="Otros_areas_apoyo_Acciones" onkeyup="validacion('Otros_areas_apoyo_Acciones')" name="Otros_areas_apoyo_Acciones" />
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción a realizar y plazo para dar la solución.</textarea></td>

                                                                               <td>
                                                                                   <div>
                                                                                   <textarea class="form-control"  rows="3" id="subrasarse_areas_apoyo_Deficiencias" onkeyup="validacion('subrasarse_areas_apoyo_Deficiencias')" name="subrasarse_areas_apoyo_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                       <span class="help-block"></span>
                                                                                   </div>
                                                                               </td>



                                                                                <td>
                                                                                    <div>

                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_areas_apoyo_Acciones" onkeyup="validacion('subrasarse_areas_apoyo_Acciones')" name="subrasarse_areas_apoyo_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                        <span class="help-block"></span>
                                                                                    </div>
                                                                                </td>


                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div><br>
                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="background-color: black; margin-left: 10px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="background-color: black; margin-left: 10px" />
                                                                    <center><p>Firma del Jefe de la Oficina de<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="panel panel-color panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">ASPECTOS LOGÍSTICOS:</h3>
                                                        </div><div class="panel-body">
                                                            <h4>Servicios Tercerizados.</h4><br>
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";t>SERVICIO</th>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;">Deficiencias Identificadas</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Mensajería</textarea></td>
                                                                            <td>
                                                                             <div>
                                                                                 <textarea class="form-control"  rows="2" id="Mensajería_aspectos_logisticos_Deficiencias" onkeyup="validacion('Mensajería_aspectos_logisticos_Deficiencias')" name="Mensajería_aspectos_logisticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                 <span class="help-block"></span>
                                                                             </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="validacion('Mensajería_aspectos_logisticos_Acciones')"  rows="2" id="Mensajería_aspectos_logisticos_Acciones"  name="Mensajería_aspectos_logisticos_Acciones" onkeyup="validacion('Mensajería_aspectos_logisticos_Deficiencias')"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>

                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Fotocopiado" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Fotocopiado_aspectos_logisticos_Deficiencias" onkeyup="validacion('Fotocopiado_aspectos_logisticos_Deficiencias')" name="Fotocopiado_aspectos_logisticos_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Fotocopiado_aspectos_logisticos_Acciones" onkeyup="validacion('Fotocopiado_aspectos_logisticos_Acciones')" name="Fotocopiado_aspectos_logisticos_Acciones" />
                                                                                    <span class="help-block"></span>

                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Limpieza"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Limpieza_aspectos_logisticos_Deficiencias" onkeyup="validacion('Limpieza_aspectos_logisticos_Deficiencias')" name="Limpieza_aspectos_logisticos_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Limpieza_aspectos_logisticos_Acciones" onkeyup="validacion('Limpieza_aspectos_logisticos_Acciones')" name="Limpieza_aspectos_logisticos_Acciones" />
                                                                                    <span class="help-block"></span>

                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Traducciones" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                            <div>
                                                                                <input type="text" class="form-control"  id="Traducciones_aspectos_logisticos_Deficiencias" onkeyup="validacion('Traducciones_aspectos_logisticos_Deficiencias')" name="Traducciones_aspectos_logisticos_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            </td>
                                                                            <td>
                                                                             <div>
                                                                                 <input type="text" class="form-control" id="Traducciones_aspectos_logisticos_Archivos" onkeyup="validacion('Traducciones_aspectos_logisticos_Archivos')" name="Traducciones_aspectos_logisticos_Archivos" />
                                                                                 <span class="help-block"></span>

                                                                             </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Publicaciones (Edictos)" style="color: black;font-weight: bold;"  /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="validacion('Publicaciones_aspectos_logisticos_Deficiencias')" id="Publicaciones_aspectos_logisticos_Deficiencias" name="Publicaciones_aspectos_logisticos_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                              <div>
                                                                                  <input type="text" class="form-control" onkeyup="validacion('Publicaciones_aspectos_logisticos_Acciones')" id="Publicaciones_aspectos_logisticos_Acciones"  name="Publicaciones_aspectos_logisticos_Acciones" />
                                                                                  <span class="help-block"></span>
                                                                              </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Arrendamiento de Locales"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validacion('Arrendamiento_aspectos_logisticos_Deficiencias')" id="Arrendamiento_aspectos_logisticos_Deficiencias" name="Arrendamiento_aspectos_logisticos_Deficiencias"/>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validacion('Arrendamiento_aspectos_logisticos_Acciones')" id="Arrendamiento_aspectos_logisticos_Acciones" name="Arrendamiento_aspectos_logisticos_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Vehículos." style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control"  onkeyup="validacion('Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias')" id="Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias" name="Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Mantenimiento_vehiculos_aspectos_logisticos_Acciones" onkeyup="validacion('Mantenimiento_vehiculos_aspectos_logisticos_Acciones')" name="Mantenimiento_vehiculos_aspectos_logisticos_Acciones"/>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Otros." style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control"  id="Otros_aspectos_logisticos_Deficiencias" onkeyup="validacion('Otros_aspectos_logisticos_Deficiencias')" name="Otros_aspectos_logisticos_Deficiencias" />

                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Otros_aspectos_logisticos_Acciones" onkeyup="validacion('Otros_aspectos_logisticos_Acciones')" name="Otros_aspectos_logisticos_Acciones" />
                                                                            <span class="help-block"></span>
                                                                                 </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción arealizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="3" id="subrasarse_Aspectos_logisticos_Deficiencias" onkeyup="validacion('subrasarse_Aspectos_logisticos_Deficiencias')"  name="subrasarse_Aspectos_logisticos_Deficiencias" style="color: black;font-weight: bold;" >
                                                                                </textarea>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="3" id="subrasarse_Aspectos_logisticos_Acciones" onkeyup="validacion('subrasarse_Aspectos_logisticos_Acciones')" name="subrasarse_Aspectos_logisticos_Acciones" style="color: black;font-weight: bold;" >

                                                                                </textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table><br>
                                                                    <h4>Servicios básicos.</h4><br>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";t>SERVICIO</th>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;">Deficiencias Identificadas</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Energía Eléctrica</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Energía_servicio_bascios_Deficiencias" onkeyup="validacion('Energía_servicio_bascios_Deficiencias')"  name="Energía_setvicio_bascios_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                               </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Energía_servicio_bascios_Acciones" onkeyup="validacion('Energía_servicio_bascios_Acciones')"  name="Energía_setvicio_bascios_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Agua" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Agua_servicio_bascios_Deficiencias" onkeyup="validacion('Agua_servicio_bascios_Deficiencias')" name="Agua_servicio_bascios_Deficiencias"/>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Agua_servicio_bascios_Acciones" onkeyup="validacion('Agua_servicio_bascios_Acciones')" name="Agua_servicio_bascios_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                    </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Telefonía / Internet"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Telefonía_servicio_bascios_Deficiencias" onkeyup="validacion('Telefonía_servicio_bascios_Deficiencias')" name="Telefonía_servicio_bascios_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                <div>
                                                                                <input type="text" class="form-control" id="Telefonía_servicio_bascios_Acciones" onkeyup="validacion('Telefonía_servicio_bascios_Acciones')" name="Telefonía_servicio_bascios_Acciones" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control"  id="Otros_servicios_basicos_Deficiencias" onkeyup="validacion('Otros_servicios_basicos_Deficiencias')" name="Otros_servicios_basicos_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Otros_servicios_basicos_Acciones" onkeyup="validacion('Otros_servicios_basicos_Acciones')" name="Otros_servicios_basicos_Acciones"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción a realizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_servicios_basicos_Deficiencias" onkeyup="validacion('subrasarse_servicios_basicos_Deficiencias')" name="subrasarse_servicios_basicos_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_servicios_basicos_Acciones" onkeyup="validacion('subrasarse_servicios_basicos_Acciones')"  name="subrasarse_servicios_basicos_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table><br>
                                                                </div><br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="background-color: black; margin-left: 5px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="background-color: black; margin-left: 5px" />
                                                                    <center><p>Firma del Jefe de la Oficina de.<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="panel panel-color panel-warning">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">MOBILIARIOS</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";t>MOBILIARIO</th>
                                                                        <th style="padding-bottom: 50px;text-align: center;padding-bottom: 10px;" width="30%;">Deficiencias Identificadas Indicar el
                                                                            estado de conservación de los bienes y el
                                                                            porqué de la calificación?</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>

                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Armarios / Archivadores</textarea></td>
                                                                            <td>
                                                                            <div>
                                                                                <textarea class="form-control"  onkeyup="validacion('Armarios_mobiliario_Deficiencias')" rows="2" id="Armarios_mobiliario_Deficiencias" name="Armarios_mobiliario_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>

                                                                            </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"   onkeyup="validacion('Armarios_mobiliario_Acciones')" rows="2" id="Armarios_mobiliario_Acciones"  name="Armarios_mobiliario_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Estantería Metálica para archivos (Ángulos ranurados)</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="validacion('Estantería_mobiliario_Deficiencias')" rows="3" id="Estantería_mobiliario_Deficiencias" name="Estantería_mobiliario_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                            </td>

                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"onkeyup="validacion('Estantería_mobiliario_Acciones')"  rows="3" id="Estantería_mobiliario_Acciones" name="Estantería_mobiliario_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Escritorios / Mesas"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Escritorios_mobiliario_Deficiencias" onkeyup="validacion('Escritorios_mobiliario_Deficiencias')"  name="Escritorios_mobiliario_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Escritorios_mobiliario_Acciones" onkeyup="validacion('Escritorios_mobiliario_Acciones')"  name="Escritorios_mobiliario_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Sillas / Sillones" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="validacion('Sillas_mobiliario_Deficiencias')"  id="Sillas_mobiliario_Deficiencias" name="Sillas_mobiliario_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Sillas_mobiliario_Archivos" onkeyup="validacion('Sillas_mobiliario_Archivos')"  name="Sillas_mobiliario_Archivos" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Módulos para computadora" style="color: black;font-weight: bold;"  /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Módulos_computadoras_mobiliarios_Deficiencias" onkeyup="validacion('Módulos_computadoras_mobiliarios_Deficiencias')"  name="Módulos_computadoras_mobiliarios_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Módulos_computadoras_mobiliarios_Acciones"  onkeyup="validacion('Módulos_computadoras_mobiliarios_Acciones')" name="Módulos_computadoras_mobiliarios_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Otros"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                               <div>
                                                                                   <input type="text" class="form-control" id="otros_mobiliario_Deficiencias" onkeyup="validacion('otros_mobiliario_Deficiencias')" name="otros_mobiliario_Deficiencias" />
                                                                                   <span class="help-block"></span>
                                                                               </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control"  id="otros_mobiliario_Acciones" onkeyup="validacion('otros_mobiliario_Acciones')" name="otros_mobiliario_Acciones"/>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción a realizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_mobiliarios_Deficiencias" onkeyup="validacion('subrasarse_mobiliarios_Deficiencias')" name="subrasarse_mobiliarios_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_mobiliarios_Acciones" onkeyup="validacion('subrasarse_mobiliarios_Acciones')" name="subrasarse_mobiliarios_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h6 style="margin-left: 20px;font-weight: bold;">CALIFICACIÓN: BUENO (B), REGULAR (R), MALO (M).</h6>
                                                                </div>
                                                                <br>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="panel panel-color panel-danger">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">SUMINISTRO DE MATERIALES Y UTILES DE OFICINA</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";t>ASPECTO</th>
                                                                        <th style="padding-bottom: 50px;text-align: center;padding-top: 10px;" width="30%;">Deficiencias Identificadas</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Papel Bond A4</textarea></td>
                                                                            <td>
                                                                               <div> <textarea class="form-control"  rows="2" onkeyup="validacion('Papel_suministro_Deficiencias')"  id="Papel_suministro_Deficiencias"  name="Papel_suministro_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                   <span class="help-block"></span>
                                                                               </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Papel_suministro_Acciones" onkeyup="validacion('Papel_suministro_Acciones')"   name="Papel_suministro_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Bolígrafos / Grapas 26/6</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="Bolígrafos_suministro_Deficiencias" onkeyup="validacion('Bolígrafos_suministro_Deficiencias')" name="Bolígrafos_suministro_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="Bolígrafos_suministro_Acciones" onkeyup="validacion('Bolígrafos_suministro_Acciones')" name="Bolígrafos_suministro_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Cinta p/Impresora matricial/Tóner p/Impresora</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="validacion('Cinta_suministro_Deficiencias')"  rows="3" id="Cinta_suministro_Deficiencias" name="Cinta_suministro_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                        </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="Cinta_suministro_Acciones" onkeyup="validacion('Cinta_suministro_Acciones')"   name="Cinta_suministro_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Carátulas para expedientes"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Carátulas_suministro_Deficiencias" onkeyup="validacion('Carátulas_suministro_Deficiencias')"  name="Carátulas_suministro_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Carátulas_suministro_Acciones" onkeyup="validacion('Carátulas_suministro_Acciones')"  name="Carátulas_suministro_Acciones"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="El Peruano (suministro)" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control"  id="Peruano_suministro_Deficiencias"  onkeyup="validacion('Peruano_suministro_Deficiencias')"   name="Peruano_suministro_Deficiencias"/>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Peruano_suministro_Archivos" onkeyup="validacion('Peruano_suministro_Archivos')" name="Peruano_suministro_Archivos"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Otros (Archivador Palanca,
Símbolos y distintivo, Boletín de
Condenas Nº 1, etc.)</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                     <textarea class="form-control"  rows="3" id="Otros_suministro_Deficiencias"  onkeyup="validacion('Otros_suministro_Deficiencias')" name="Otros_suministro_Deficiencias"   style="color: black;font-weight: bold;" >
                                                                                </textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="Otros_suministro_Acciones"  onkeyup="validacion('Otros_suministro_Acciones')"  name="Otros_suministro_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_suministro_Deficiencias"  onkeyup="validacion('subrasarse_suministro_Deficiencias')"  name="subrasarse_suministro_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                              <div>  <textarea class="form-control"  rows="3" id="subrasarse_suministro_Acciones"   onkeyup="validacion('subrasarse_suministro_Acciones')"  name="subrasarse_suministro_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                  <span class="help-block"></span></div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Jefe de la Oficina de<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                                                <li><button type="button" id="next1" class="btn btn-primary next">Next</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <div class="panel panel-color panel-success">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">ASPECTOS INFORMATICOS</h3>
                                                </div><div class="panel-body">
                                                    <div class="col-12"style="width: 100%;height: auto">

                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped table-highlight">
                                                                <thead>
                                                                <th style="padding-bottom: 50px;text-align: center" width="30%;";t>ASPECTO</th>
                                                                <th style="padding-bottom: 50px;padding-bottom: 10px;" width="30%;">Deficiencias Identificadas Indicar
                                                                    el estado de conservación de los bienes y el porqué de la calificación?</th>
                                                                <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Computadoras</textarea></td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="2" id="Computadoras_informaticos_Deficiencias" onkeyup="validacion('Computadoras_informaticos_Deficiencias')" name="Computadoras_informaticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>

                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="2" id="Computadoras_informaticos__Acciones" onkeyup="validacion('Computadoras_informaticos__Acciones')"  name="Computadoras_informaticos__Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Impresoras</textarea></td>
                                                                    <td>
                                                                       <div>
                                                                           <textarea class="form-control"  rows="2" id="Impresoras_informaticos_Deficiencias" onkeyup="validacion('Impresoras_informaticos_Deficiencias')"  name="Impresoras_informaticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                           <span class="help-block"></span>
                                                                       </div>
                                                                    </td>
                                                                    <td>
                                                                    <div>
                                                                        <textarea class="form-control"  rows="2" id="Impresoras_informaticos_Acciones" name="Impresoras_informaticos_Acciones" onkeyup="validacion('Impresoras_informaticos_Acciones')" style="color: black;font-weight: bold;" ></textarea>
                                                                        <span class="help-block"></span>
                                                                    </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="text" class="form-control" readonly value="Fax"style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" id="Fax_Informaticos_Deficiencias" onkeyup="validacion('Fax_Informaticos_Deficiencias')" name="Fax_Informaticos_Deficiencias" />
                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" id="Fax_informaticos_Acciones" onkeyup="validacion('Fax_informaticos_Acciones')" name="Fax_informaticos_Acciones" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Equipos de Cómputo" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                      <div>
                                                                          <input type="text" class="form-control"  id="Mantenimiento_equipos_Informaticos_Deficiencias" onkeyup="validacion('Mantenimiento_equipos_Informaticos_Deficiencias')"  name="Mantenimiento_equipos_Informaticos_Deficiencias" />
                                                                          <span class="help-block"></span>
                                                                      </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" id="Mantenimiento_equipos_Informaticos_Acciones" onkeyup="validacion('Mantenimiento_equipos_Informaticos_Acciones')" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="UPS" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control"  id="UPS_Informaticos_Deficiencias"  onkeyup="validacion('UPS_Informaticos_Deficiencias')" name="UPS_Informaticos_Deficiencias" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                       <div>
                                                                           <input type="text" class="form-control" id="UPS_Informaticos_Acciones" onkeyup="validacion('UPS_Informaticos_Acciones')" name="UPS_Informaticos_Acciones" />
                                                                           <span class="help-block"></span>
                                                                       </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="Supresor de Picos" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                    <div>
                                                                        <input type="text" class="form-control"  id="supresor_picos_Informaticos_Deficiencias" onkeyup="validacion('supresor_picos_Informaticos_Deficiencias')" name="supresor_picos_Informaticos_Deficiencias" />
                                                                        <span class="help-block"></span>
                                                                    </div>
                                                                    </td>
                                                                    <td>
                                                                      <div>
                                                                          <input type="text" class="form-control" id="supresor_picos_Informaticos_Acciones" onkeyup="validacion('supresor_picos_Informaticos_Acciones')" name="supresor_picos_Informaticos_Acciones" />
                                                                          <span class="help-block"></span>
                                                                      </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="Correo Electronico" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                       <div>
                                                                           <input type="text" class="form-control"  id="Correo_Informaticos_Deficiencias" onkeyup="validacion('Correo_Informaticos_Deficiencias')" name="Correo_Informaticos_Deficiencias" />
                                                                           <span class="help-block"></span>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" id="Correo_Informaticos_Acciones" onkeyup="validacion('Correo_Informaticos_Acciones')"  name="Correo_Informaticos_Acciones" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="Sistemas Informáticos – Software" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" onkeyup="validacion('sistemas_Informaticos_Deficiencias')" id="sistemas_Informaticos_Deficiencias" name="sistemas_Informaticos_Deficiencias" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                       <div>
                                                                           <input type="text" class="form-control" id="sistemas_Informaticos_Acciones" onkeyup="validacion('sistemas_Informaticos_Acciones')" name="sistemas_Informaticos_Acciones" />
                                                                           <span class="help-block"></span>
                                                                       </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="text"  class="form-control" readonly value="Redes Informáticos" style="color: black;font-weight: bold;" /></td>
                                                                    <td>
                                                                       <div>
                                                                           <input type="text" class="form-control"  id="Redes_Informáticos_Informaticos_Deficiencias" onkeyup="validacion('Redes_Informáticos_Informaticos_Deficiencias')" name="Redes_Informáticos_Informaticos_Deficiencias" />
                                                                           <span class="help-block"></span></div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <input type="text" class="form-control" id="Redes_Informáticos_Informaticos_Acciones" onkeyup="validacion('Redes_Informáticos_Informaticos_Acciones')"  name="Redes_Informáticos_Informaticos_Acciones" />
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Otros</textarea></td>
                                                                    <td>
                                                                      <div>
                                                                          <textarea class="form-control"  rows="2" id="Otros_Informaticos_Deficiencias" onkeyup="validacion('Otros_Informaticos_Deficiencias')"  name="Otros_Informaticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                          <span class="help-block"></span>
                                                                      </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>

                                                                            <textarea class="form-control"  rows="2" id="Otros_Informaticos_Acciones"  onkeyup="validacion('Otros_Informaticos_Acciones')"  name="Otros_Informaticos_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción a realizar y plazo para dar la solución.</textarea></td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="3" id="subrasarse_Informaticos_Deficiencias" onkeyup="validacion('subrasarse_Informaticos_Deficiencias')" name="subrasarse_Informaticos_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                        <textarea class="form-control"  rows="3" onkeyup="validacion('subrasarse_Informaticos_Acciones')" id="subrasarse_Informaticos_Acciones" name="subrasarse_Informaticos_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                        <span class="help-block"></span>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <h6 style="margin-left: 20px;">CALIFICACIÓN: BUENO (B), REGULAR (R), MALO (M).</h6>

                                                        </div>
                                                        <br>

                                                    </div>
                                                    <div class="panel panel-color panel-dark">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">ASPECTOS DE SEGURIDAD.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";t>ASPECTO</th>
                                                                        <th style="padding-bottom: 50px;padding-bottom: 10px;" width="30%;">Deficiencias Identificadas</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Detectores de Metal</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="2" onkeyup="validaciones('Aspectos_seguridad_detectorM_Deficiencias')" id="Aspectos_seguridad_detectorM_Deficiencias" name="Aspectos_seguridad_detectorM_Deficiencias"   style="color: black;font-weight: bold;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_seguridad_detectorM_Acciones"  onkeyup="validaciones('Aspectos_seguridad_detectorM_Acciones')" name="Aspectos_seguridad_detectorM_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Extintores</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Deficiencias" onkeyup="validaciones('Aspectos_seguridad_Extintores_Deficiencias')" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" onkeyup="validaciones('Aspectos_seguridad_Extintores_Acciones')" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Mangueras contra incendio"style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control"  onkeyup="validaciones('Aspectos_seguridad_Mangueras_Deficiencias')" id="Aspectos_seguridad_Mangueras_Deficiencias" name="Aspectos_seguridad_Mangueras_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Aspectos_seguridad_Mangueras_Acciones" onkeyup="validaciones('Aspectos_seguridad_Mangueras_Acciones')" name="Aspectos_seguridad_Mangueras_Acciones"  />

                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_seguridad_Otros_Deficiencias')" id="Aspectos_seguridad_Otros_Deficiencias" name="Aspectos_seguridad_Otros_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control"  onkeyup="validaciones('Aspectos_seguridad_Otros_Acciones')" id="Aspectos_seguridad_Otros_Acciones" name="Aspectos_seguridad_Otros_Acciones" />
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la deficiencia explicar la acción a realizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="3" id="subrasarse_Aspectos_seguridad_Deficiencias" onkeyup="validaciones('subrasarse_Aspectos_seguridad_Deficiencias')" name="subrasarse_Aspectos_seguridad_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="subrasarse_Aspectos_seguridad_Acciones" onkeyup="validaciones('subrasarse_Aspectos_seguridad_Acciones')" name="subrasarse_Aspectos_seguridad_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                                </div>
                                                                </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Jefe de la Oficina de<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="panel panel-color panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">ASPECTOS GENERALES DEL INMUEBLE.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <tr>
                                                                            <th colspan="3"><label>Cuando el local visitado, es de <label style="color: black;">PROPIEDAD</label> del Poder Judicial, deberá señalar de manera pormenorizada las
                                                                                    deficiencias encontradas en los aspectos del inmueble, como se muestra a continuación:</label></th>
                                                                        </tr>
                                                                        <th style="padding-bottom: 50px;text-align: center" width="30%;";>ASPECTO</th>
                                                                        <th  width="30%;">Deficiencias Identificadas Indicar el estado de
                                                                            conservación de los bienes y el  porqué de la calificación?</th>
                                                                        <th style="padding-bottom: 20px;text-align: center" width="40%;"><p>Acciones que adopto la Administración para subsanar la(s) deficiencia(s) Explicar la solución?</p></th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Estructuras</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_generales_Estructuras_Deficiencias"onkeyup="validaciones('Aspectos_generales_Estructuras_Deficiencias')" name="Aspectos_generales_Estructuras_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_generales_Estructuras_Acciones" onkeyup="validaciones('Aspectos_generales_Estructuras_Acciones')"   name="Aspectos_generales_Estructuras_Acciones"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Puertas</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_generales_Puertas_Deficiencias" onkeyup="validaciones('Aspectos_generales_Puertas_Deficiencias')" name="Aspectos_generales_Puertas_Deficiencias"  style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>

                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Aspectos_generales_Puertas_Acciones"  onkeyup="validaciones('Aspectos_generales_Puertas_Acciones')" name="Aspectos_generales_Puertas_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text" class="form-control" readonly value="Ventanas"style="color: black;font-weight: bold;" /></td>
                                                                            <td>

                                                                                <div>
                                                                                    <input type="text" class="form-control" id="Aspectos_generales_Ventanas_Deficiencias"  onkeyup="validaciones('Aspectos_generales_Ventanas_Deficiencias')" name="Aspectos_generales_Ventanas_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Ventanas_Acciones')" id="Aspectos_generales_Ventanas_Acciones" name="Aspectos_generales_Ventanas_Acciones"  />
                                                                                <span class="help-block"></span>
                                                                                      </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Pisos" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Pisos_Deficiencias')" id="Aspectos_generales_Pisos_Deficiencias" name="Aspectos_generales_Pisos_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                                    </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Pisos_Acciones')" id="Aspectos_generales_Pisos_Acciones" name="Aspectos_generales_Pisos_Acciones" />
                                                                                <span class="help-block"></span>
                                                                                 </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Pintura (externa – interna)" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Pintura_Deficiencias')" id="Aspectos_generales_Pintura_Deficiencias" name="Aspectos_generales_Pintura_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control"  onkeyup="validaciones('Aspectos_generales_Pintura_Acciones')" id="Aspectos_generales_Pintura_Acciones" name="Aspectos_generales_Pintura_Acciones" />
                                                                                <span class="help-block"></span>
                                                                                 </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Instalaciones Sanitarias" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control"  onkeyup="validaciones('Aspectos_generales_Instalaciones_Sanitarias_Deficiencias')" id="Aspectos_generales_Instalaciones_Sanitarias_Deficiencias" name="Aspectos_generales_Instalaciones_Sanitarias_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                               </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Instalaciones_Sanitarias_Acciones')" id="Aspectos_generales_Instalaciones_Sanitarias_Acciones" name="Aspectos_generales_Instalaciones_Sanitarias_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Instalaciones Eléctricas" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Instalaciones_Eléctricas_Deficiencias')" id="Aspectos_generales_Instalaciones_Eléctricas_Deficiencias" name="Aspectos_generales_Instalaciones_Eléctricas_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Instalaciones_Eléctricas_Acciones')" id="Aspectos_generales_Instalaciones_Eléctricas_Acciones" name="Aspectos_generales_Instalaciones_Eléctricas_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Brinda Seguridad" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_brinda_Seguridad_Deficiencias')"  id="Aspectos_generales_brinda_Seguridad_Deficiencias" name="Aspectos_generales_brinda_Seguridad_Deficiencias" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_brinda_Seguridad_Acciones')" id="Aspectos_generales_brinda_Seguridad_Acciones" name="Aspectos_generales_brinda_Seguridad_Acciones" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Local" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Mantenimiento_local_Deficiencias')"  id="Aspectos_generales_Mantenimiento_local_Deficiencias" name="Aspectos_generales_Mantenimiento_local_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Mantenimiento_local_Acciones')"  id="Aspectos_generales_Mantenimiento_local_Acciones" name="Aspectos_generales_Mantenimiento_local_Acciones" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Otros_Deficiencias')" id="Aspectos_generales_Otros_Deficiencias" name="Aspectos_generales_Otros_Deficiencias" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" onkeyup="validaciones('Aspectos_generales_Otros_Acciones')"  id="Aspectos_generales_Otros_Acciones" name="Aspectos_generales_Otros_Acciones" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="3" onkeyup="validaciones('subrasarse_Aspectos_generales_Deficiencias')" id="subrasarse_Aspectos_generales_Deficiencias" name="ssubrasarse_Aspectos_generales_Deficiencias" style="color: black;font-weight: bold;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="3" onkeyup="validaciones('subrasarse_Aspectos_generales_Acciones')" id="subrasarse_Aspectos_generales_Acciones" name="subrasarse_Aspectos_generales_Acciones" style="color: black;font-weight: bold;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="3"><label>Cuando el local visitado es <label style="color: black;">ALQUILADO</label> , y en la visita se han encontrado deficiencias en los aspectos del inmueble (cuadro
                                                                                    anterior), señalar las deficiencias encontradas para las reparaciones que se requieran, precisando que <label style="color: black">no se efectuaran
                                                                                        mejoras en locales alquilados.</label></label></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div>
                                                                                <input  type="text" id="Aspectos_generales_ALQUILADO" onkeyup="validaciones('Aspectos_generales_ALQUILADO')"  name="Aspectos_generales_ALQUILADO" class="form-control"  placeholder="-------------------------------------------------------------------" style="color: black;font-weight: bold;" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Aspectos_generales_ALQUILADO1" onkeyup="validaciones('Aspectos_generales_ALQUILADO1')"  name="Aspectos_generales_ALQUILADO1" placeholder="----------------------------------------------------------------------"  />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Aspectos_generales_ALQUILADO2" onkeyup="validaciones('Aspectos_generales_ALQUILADO2')"  name="Aspectos_generales_ALQUILADO2" placeholder="----------------------------------------------------------------------"  />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="3">Si el local visitado tiene la condición de <label style="color: black;">CEDIDO EN USO,</label> ,y en la visita se han advertido deficiencias en los aspectos del
                                                                                inmueble (cuadro anterior), podrá coordinar con la Oficina de Infraestructura a fin de que está evalué las acciones a tomar,
                                                                                siempre y cuando el plazo de cesión en uso es superior a los 10 años.></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div>
                                                                                    <input  type="text"  class="form-control" id="Aspectos_generales_CEDIDO" onkeyup="validaciones('Aspectos_generales_CEDIDO')" name="Aspectos_generales_CEDIDO" placeholder="-------------------------------------------------------------------" style="color: black;font-weight: bold;" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Aspectos_generales_CEDIDO1" onkeyup="validaciones('Aspectos_generales_CEDIDO1')" name="Aspectos_generales_CEDIDO1" placeholder="----------------------------------------------------------------------"  />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                <input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" onkeyup="validaciones('Aspectos_generales_CEDIDO2')" name="Aspectos_generales_CEDIDO2" placeholder="----------------------------------------------------------------------" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="3"><label>Nota: </label>En los casos de inmuebles de propiedad de la Entidad o en condición de Cesión en Uso (mayor a 10 años) que requieran
                                                                                de la intervención de la Oficina de Infraestructura, podrán presentar fotografías en las cuales se pueda apreciar la(s)
                                                                                deficiencia(s) encontrada(s) en la Visita, para la evaluación respectiva.</th>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Jefe de la Oficina de<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div><br>





                                                        </div>


                                                    </div>
                                                    <div class="panel panel-color panel-primary">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">SERVICIOS JUDICIALES.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <h5 style="margin-left: 10px;">REGISTRO NACIONAL DE INTERNOS PROCESADOS Y SENTENCIADOS “RENIPROS”</h5>
                                                                    <p style="margin-left: 10px;"> Verificar el cumplimiento del Reglamento del Registro Nacional de Internos, Procesados y Sentenciados
                                                                        <label style="color: black"> “RENIPROS”</label>, aprobado mediante R.A. de Presidente del Poder Judicial Nº 166-2005-P-PJ”</p>
                                                                    <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="text-align: center" width="2%;";t>Nº</th>
                                                                        <th style="padding-bottom: 10px;" width="40%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                        <th style="text-align: center" width="5%;">si</th>
                                                                        <th style="text-align: center" width="5%;">no</th>
                                                                        <th style="text-align: center" width="48%;">OBSERVACIONES</th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td><textarea class="form-control" readonly  rows="3" style="color: black;font-weight: bold; ">¿Se cumple con el llenado de la Ficha única del Renipros al ordenar el internamiento o salida del Procesado o Sentenciado?</textarea></td>
                                                                            <td><textarea class="form-control"  onkeyup="validaciones('servicio_judiciales_SI_1')"  rows="2" id="servicio_judiciales_SI_1" name="servicio_judiciales_SI_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                            <td><textarea class="form-control" onkeyup="validaciones('servicio_judiciales_NO_1')"  rows="2" id="servicio_judiciales_NO_1" name="servicio_judiciales_NO_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"   onkeyup="validaciones('servicio_judiciales_Observaciones_1')"  rows="2" id="servicio_judiciales_Observaciones_1" name="servicio_judiciales_Observaciones_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                                    <span class="help-block"></span>

                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Remite a su Registro Distrital de Internos Procesados y Sentenciados (Redipros), la Ficha Única del Renipros dentro de las 24 horas de emitido el mandato?</textarea></td>
                                                                            <td><textarea class="form-control"   onkeyup="validaciones('servicio_judiciales_SI_2')"  rows="2" id="servicio_judiciales_SI_2" name="servicio_judiciales_SI_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  onkeyup="validaciones('servicio_judiciales_NO_2')"  rows="2" id="servicio_judiciales_NO_2" name="servicio_judiciales_NO_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="2" id="servicio_judiciales_Observaciones_2" onkeyup="validaciones('servicio_judiciales_Observaciones_2')" name="servicio_judiciales_Observaciones_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Al remitir la Ficha Única del Renipros ¿Adjunta la Resolución Judicial que da origen al llenado de la Ficha en copia certificada por el Secretario de Juzgado o Sala?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="servicio_judiciales_SI_3" onkeyup="validaciones('servicio_judiciales_SI_3')" name="servicio_judiciales_SI_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="servicio_judiciales_NO_3"  onkeyup="validaciones('servicio_judiciales_NO_3')" name="servicio_judiciales_NO_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="2" id="servicio_judiciales_Observaciones_3" onkeyup="validaciones('servicio_judiciales_Observaciones_3')" name="servicio_judiciales_Observaciones_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                                </div>
                                                                            </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >Se cumple con informar al Redipros de los mandatos del Órgano Jurisdiccional sobre el internamiento o salida o la variación de la situación jurídica (de procesado a sentenciado)</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="servicio_judiciales_SI_4" name="servicio_judiciales_SI_4"  onkeyup="validaciones('servicio_judiciales_SI_4')" style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="servicio_judiciales_NO_4" name="servicio_judiciales_NO_4"  onkeyup="validaciones('servicio_judiciales_NO_4')" style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                     <textarea class="form-control"  rows="2" id="servicio_judiciales_Observaciones_4" onkeyup="validaciones('servicio_judiciales_Observaciones_4')" name="servicio_judiciales_Observaciones_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5">De ser negativa la respuesta, explique porque?:
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="servicio_judiciales_respuesta_negativa" onkeyup="validaciones('servicio_judiciales_respuesta_negativa')" name="servicio_judiciales_respuesta_negativa" placeholder="Escribir aqui....."  />
                                                                            <span class="help-block"></span>

                                                                </div>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN DE LA CORTE:</h5></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td colspan="5">
                                                                              <div>
                                                                                  <input type="text" class="form-control" id="servicio_judiciales_acciones1" onkeyup="validaciones('servicio_judiciales_acciones1')" name="servicio_judiciales_acciones1" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                                  <span class="help-block"></span>
                                                                              </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td colspan="5">

                                                                                <div>
                                                                                    <input type="text" class="form-control" id="servicio_judiciales_acciones2" onkeyup="validaciones('servicio_judiciales_acciones2')"  name="servicio_judiciales_acciones2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="servicio_judiciales_acciones3" onkeyup="validaciones('servicio_judiciales_acciones3')" name="servicio_judiciales_acciones3" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td colspan="5">
                                                                           <div>
                                                                               <input type="text" class="form-control" id="servicio_judiciales_acciones4"  onkeyup="validaciones('servicio_judiciales_acciones4')" name="servicio_judiciales_acciones4" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                               <span class="help-block"></span>
                                                                           </div>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td colspan="5">
                                                                               <div> <input type="text" class="form-control" id="servicio_judiciales_acciones5"  onkeyup="validaciones('servicio_judiciales_acciones5')" name="servicio_judiciales_acciones5" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />
                                                                                   <span class="help-block"></span></div>
                                                                            </td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <h6 style="margin-left: 20px;">(*) NO APLICA</h6>
                                                                </div>

                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Presidente de la Corte<br><center><p>Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p>Firma del Jefe de la Oficina de<br><center><p>Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div><br>

                                                        </div>
                                                    </div>
                                                    <div class="panel panel-color panel-warning">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">AUXILIO JUDICIAL.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <h5 style="margin-left: 10px;">INDICAR EL NUMERO DE RESOLUCION DEL TUPA Y CUADRO DEL VALOR. ASI COMO LAS DIRECTIVAS VIGENTES EN LOS ESPACIOS EN BLANCO QUE
                                                                        CORRESPONDE.</h5>
                                                                    <p style="margin-left: 10px;">Verificar el cumplimiento de la R. A. Nº 182-2004-CE-PJ, que aprueba la Directiva Nº 006-2004-CE-PJ,
                                                                        “Procedimientos para la Concesión del Beneficio de Auxilio Judicial”.</p>
                                                                    <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="text-align: center" width="2%;";t>Nº</th>
                                                                        <th style="padding-bottom: 10px;" width="40%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                        <th style="text-align: center" width="5%;">si</th>
                                                                        <th style="text-align: center" width="5%;">no</th>
                                                                        <th style="text-align: center" width="48%;">OBSERVACIONES</th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <center><td style="padding-top: 40px;">1</td></center>
                                                                            <td>
                                                                                <textarea class="form-control" readonly  rows="4" style="color: black;font-weight: bold; ">¿Cuenta con la Directiva Nº 006-2004-CE-PJ, “Procedimientos para la Concesión de Beneficio de Auxilio Judicial“ y el “Formato de Auxilio Judicial”?</textarea></td>
                                                                            <td>
                                                                                <textarea class="form-control" onkeyup="validaciones('auxilio_judicial_SI_1')"  rows="2" id="auxilio_judicial_SI_1" name="auxilio_judicial_SI_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <textarea class="form-control"  onkeyup="validaciones('auxilio_judicial_NO_1')" rows="2" id="auxilio_judicial_NO_1" name="auxilio_judicial_NO_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                            </td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="validaciones('auxilio_judicial_Observacaciones')"  rows="2" id="auxilio_judicial_Observacaciones" name="auxilio_genereal_Observacaciones_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 90px;">2</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >En los últimos doce meses ¿El Órgano Jurisdiccional concedió Auxilio Judicial?</textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >De ser afirmativa la respuesta, señale ¿Cuántas resoluciones se han expedido y su fueron puestos en conocimiento de la Oficina de Administración Distrital?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="auxilio_judicial_SI_1" onkeyup="validaciones('auxilio_judicial_SI_1')" name="auxilio_judicial_SI_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2"  onkeyup="validaciones('auxilio_judicial_SI_2_2')" id="auxilio_judicial_SI_2_2" name="auxilio_genereal_SI_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="auxilio_judicial_NO_2_1" onkeyup="validaciones('auxilio_judicial_NO_2_1')" name="auxilio_judicial_NO_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2"  onkeyup="validaciones('auxilio_judicial_NO_2_2')" id="auxilio_judicial_NO_2_2" name="auxilio_genereal_NO_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="auxilio_judicial_Observaciones_2_1" onkeyup="validaciones('auxilio_judicial_Observaciones_2_1')" name="auxilio_genereal_Observaciones_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                        <hr>
                                                                               <div>
                                                                                   <textarea class="form-control" onkeyup="validaciones('auxilio_judicial_Observaciones_2_2')" rows="2" id="auxilio_judicial_Observaciones_2_2" name="auxilio_genereal_Observaciones_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                   <span class="help-block"></span>
                                                                               </div>
                                                                            </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 40px;">3</td>
                                                                            <td><textarea class="form-control"  rows="5" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Al conceder Auxilio Judicial tiene en consideración, que se otorga a los justiciables que para cubrir los gastos del proceso, ponen en peligro su subsistencia y la de quienes de ellos dependen? (Art. 179º TUO del CPC)</textarea></td>
                                                                            <td><textarea class="form-control" onkeyup="validaciones('auxilio_judicial_SI_3')" rows="2" id="auxilio_judicial_SI_3" name="auxilio_genereal_SI_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control" onkeyup="validaciones('auxilio_judicial_NO_3')" rows="2" id="auxilio_judicial_NO_3" name="auxilio_genereal_NO_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                              <div>
                                                                                  <textarea class="form-control" onkeyup="validaciones('auxilio_judicial_Observaciones_3')" rows="3" id="auxilio_judicial_Observaciones_3" name="auxilio_genereal_Observaciones_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                  <span class="help-block"></span>
                                                                              </div>
                                                                            </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 40px;">4</td>
                                                                            <td><textarea class="form-control"  rows="6" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿En la Resolución que concede el auxilio judicial se indica que esta comprende únicamente la exoneración en la presentación del derecho por notificación judicial y aranceles judiciales, como lo precisan las normas emitidas al respecto?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="auxilio_judicial_SI_4" onkeyup="validaciones('auxilio_judicial_SI_4')" name="auxilio_genereal_SI_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="auxilio_judicial_NO_4" onkeyup="validaciones('auxilio_judicial_NO_4')" name="auxilio_genereal_NO_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><div>
                                                                                <textarea class="form-control"  rows="3" id="auxilio_judicial_Observaciones_4"  onkeyup="validaciones('auxilio_judicial_Observaciones_4')" name="auxilio_genereal_Observaciones_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">5</td>
                                                                            <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿El justiciable beneficiado con el Auxilio Judicial, usa siempre, el formato aprobado por la R.A. Nº R. A. Nº 182-2004-CE-PJ?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="validaciones('auxilio_judicial_SI_5')" id="auxilio_judicial_SI_5" name="auxilio_genereal_SI_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2"  onkeyup="validaciones('auxilio_judicial_NO_5')" id="auxilio_judicial_NO_5" name="auxilio_genereal_NO_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                <textarea class="form-control"  rows="2" onkeyup="validaciones('auxilio_judicial_Observaciones_5')" id="auxilio_judicial_Observaciones_5" name="auxilio_genereal_Observaciones_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">6</td>
                                                                            <td><textarea class="form-control"  rows="7" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿El Juzgado en los procesos judiciales en los que hubiera concedido Auxilio Judicial a la parte ganadora, cumple con requerir el reembolso de los derechos por notificación judicial y aranceles judiciales en favor del PJ., conforme lo estipula el Art.412º del TUO del CPC?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="auxilio_judicial_SI_6" name="auxilio_judicial_SI_6" onkeyup="validaciones('auxilio_judicial_SI_6')"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="" id="auxilio_judicial_NO_6" name="auxilio_judicial_NO_6" onkeyup="validaciones('auxilio_judicial_NO_6')" style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" id="auxilio_judicial_Observaciones_6" onkeyup="validaciones('auxilio_judicial_Observaciones_6')" name="auxilio_genereal_Observaciones_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN PARA MEJORAR EL SERVICIO:</h5></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="auxilio_judicial_Acciones_1" onkeyup="validaciones('auxilio_judicial_Acciones_1')" name="auxilio_genereal_Acciones_1" placeholder="Escribir aqui......"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" id="auxilio_judicial_Acciones_2" onkeyup="validaciones('auxilio_judicial_Acciones_2')" name="auxilio_genereal_Acciones_2" placeholder="Escribir aqui......"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                <input type="text" class="form-control" id="auxilio_judicial_Acciones_3" onkeyup="validaciones('auxilio_judicial_Acciones_3')" name="auxilio_genereal_Acciones_3" placeholder="Escribir aqui......" />
                                                                                <span class="help-block"></span>
                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Presidente de la Corte<br><center><p style="color: black">Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Jefe de la Oficina de<br><center><p style="color: black">Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>



                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-danger prev-step">
                                                        Anterior</button></li>
                                                <li><button type="button" class="btn btn-default next-step">Omitir</button></li>
                                                <li><button type="button" id="next2" class="btn btn-primary btn-info-full next">Next</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="complete">
                                            <div class="panel panel-color panel-success">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">PERITOS JUDICIALES.</h3>
                                                </div><div class="panel-body">
                                                    <div class="col-12"style="width: 100%;height: auto">

                                                        <div class="table-responsive">
                                                            <h5 style="margin-left: 10px;">INDICAR EL NUMERO DE RESOLUCION DEL TUPA Y CUADRO DEL VALOR. ASI COMO LAS DIRECTIVAS VIGENTES EN LOS ESPACIOS EN BLANCO QUE
                                                                CORRESPONDE.</h5>
                                                            <p style="margin-left: 10px;">Verificar el cumplimiento del reglamento de Peritos Judiciales, aprobado por Resolución Administrativa N° 351-
                                                                98-TP-CME-PJ y el manual de Procedimiento de Registro de Peritos Judiciales, aprobado con R.A <input id="Peritos_judiciales_R_A" name="Peritos_judiciales_R_A" style="width: 200px;padding: 12px 20px; margin: 8px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="_____________________________"/></p>
                                                            <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                            <table class="table table-bordered table-striped table-highlight">
                                                                <thead>
                                                                <th style="text-align: center" width="2%;";t>Nº</th>
                                                                <th style="padding-bottom: 10px;" width="40%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                <th style="text-align: center" width="5%;">si</th>
                                                                <th style="text-align: center" width="5%;">no</th>
                                                                <th style="text-align: center" width="48%;">OBSERVACIONES</th>

                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <center><td style="padding-top: 30px;">1</td></center>
                                                                    <td><textarea class="form-control" readonly  rows="2" style="color: black;font-weight: bold; ">En los últimos 6 meses ¿Han existido procesos judiciales que requirieron de un peritaje judicial?</textarea></td>
                                                                    <td>
                                                                        <textarea class="form-control"   rows="2"   onkeyup="Valida('Peritos_judiciales_SI_1');"  id="Peritos_judiciales_SI_1" name="Peritos_judiciales_SI_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>

                                                                    </td>
                                                                    <td>
                                                                        <textarea class="form-control" onkeyup="Valida('Peritos_judiciales_NO_1');"   rows="2" id="Peritos_judiciales_NO_1"  name="Peritos_judiciales_NO_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                    </td>
                                                                <td>
                                                                        <div>
                                                                            <textarea  rows="2" class="form-control" onkeyup="Valida('Peritos_judiciales_Obserbaciones_1');" id="Peritos_judiciales_Obserbaciones_1"  name="Peritos_judiciales_Obserbaciones_1" placeholder="Escribir aqui......" ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-top: 90px;">2</td>
                                                                    <td>
                                                                        <textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Al nombrar Peritos Judiciales ¿El Juzgado utiliza los peritos del REPEJ y/o Administración Distrital?</textarea>
                                                                        <hr size="2" color="black"><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >EL REPEJ y/o Administración, demoran en designar a los Peritos Judiciales? Indicar número de días.</textarea></td>

                                                                    <td>
                                                                        <textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_2_1" name="Peritos_judiciales_SI_2_1" onkeyup="Valida('Peritos_judiciales_SI_2_1')"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>

                                                                        <hr size="2" color="black">

                                                                        <textarea class="form-control"  rows="2"  onkeyup="Valida('Peritos_judiciales_SI_2_2')" id="Peritos_judiciales_SI_2_2" name="Peritos_judiciales_SI_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>

                                                                    </td>
                                                                    <td>
                                                                        <textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_2_1" onkeyup="Valida('Peritos_judiciales_NO_2_1')" name="Peritos_judiciales_NO_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>


                                                                        <hr size="2" color="black">

                                                                        <textarea class="form-control"  onkeyup="Valida('Peritos_judiciales_NO_2_2')" rows="2" id="Peritos_judiciales_NO_2_2" name="Peritos_judiciales_NO_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_2_1" onkeyup="Valida('Peritos_judiciales_Obserbaciones_2_1')" name="Peritos_judiciales_Obserbaciones_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " >
                                                                            </textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                        <hr>
                                                                        <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_2_2"  onkeyup="Valida('Peritos_judiciales_Obserbaciones_2_2')" name="Peritos_judiciales_Obserbaciones_2_2"  style="color: black;font-weight: bold;">
</textarea>
                                                                                <span class="help-block"></span>

                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-top: 40px;">3</td>
                                                                    <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Durante el año, los Jueces han requerido Peritos de una profesión o especialidad que no existe en la nómina del REPEJ o Administración?</textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_3" name="Peritos_judiciales_SI_3" onkeyup="Valida('Peritos_judiciales_SI_3')"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_3" name="Peritos_judiciales_NO_3" onkeyup="Valida('Peritos_judiciales_NO_3')"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="3" id="Peritos_judiciales_Obserbaciones_3" onkeyup="Valida('Peritos_judiciales_Obserbaciones_3')"  name="Peritos_judiciales_Obserbaciones_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>

                                                                            <span class="help-block"></span>
                                                                        </div>

                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-top: 40px;">4</td>
                                                                    <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Si la respuesta es afirmativa, utilizan el Peritaje Extraordinario (Cuando el especialista requerido no existe en el PREPEJ o Administración?</textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_4" onkeyup="Valida('Peritos_judiciales_SI_4')" name="Peritos_judiciales_SI_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_4" onkeyup="Valida('Peritos_judiciales_NO_4')" name="Peritos_judiciales_NO_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="3" id="Peritos_judiciales_Obserbaciones_4" onkeyup="Valida('Peritos_judiciales_Obserbaciones_4')"  name="Peritos_judiciales_Obserbaciones_4"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="padding-top: 40px;">5</td>
                                                                    <td><textarea class="form-control"  rows="6" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿El Juez al designar a los especialistas que no se existen en la nómina del REPEJ, dispone la retención del 8% de los honorarios netos a favor de PJ? Nota.- Esto no es adecuado porque el 8% es deduce de los honorarios netos de los peritos del REPEJ y de administración.</textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_5"  onkeyup="Valida('Peritos_judiciales_SI_5')"  name="Peritos_judiciales_SI_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_5"   onkeyup="Valida('Peritos_judiciales_NO_5')" name="Peritos_judiciales_NO_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_5"  onkeyup="Valida('Peritos_judiciales_Obserbaciones_5')" name="Peritos_judiciales_Obserbaciones_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>

                                                                    <span class="help-block"></span>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="padding-top: 90px;">6</td>
                                                                    <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Los peritos del REPEJ o Administración aceptan la designación por escrito ante el Juez de la causa en procesos penales (gratuitos)?</textarea>
                                                                        <hr size="2" color="black"><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿De ser negativa la respuesta precisar si se informa al REPEJ o Administración, para que consideren su conducta en la renovación de la inscripción.</textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_6_1" onkeyup="Valida('Peritos_judiciales_SI_6_1')" name="Peritos_judiciales_SI_6_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                        <hr size="2" color="black"><textarea class="form-control"  rows="2" onkeyup="Valida('Peritos_judiciales_SI_6_2')" id="Peritos_judiciales_SI_6_2" name="Peritos_judiciales_SI_6_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_6_1"  onkeyup="Valida('Peritos_judiciales_NO_6_1')" name="Peritos_judiciales_NO_6_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                        <hr size="2" color="black"><textarea class="form-control" onkeyup="Valida('Peritos_judiciales_NO_6_2')" rows="2" id="Peritos_judiciales_NO_6_2" name="Peritos_judiciales_NO_6_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                    <td>
                                                                        <div>

                                                                            <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_6_1" onkeyup="Valida('Peritos_judiciales_Obserbaciones_6_1')"  name="Peritos_judiciales_Obserbaciones_6_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>


                                                                        <hr>
                                                                        <div>
                                                                            <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_6_2" onkeyup="Valida('Peritos_judiciales_Obserbaciones_6_2')" name="Peritos_judiciales_Obserbaciones_6_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                        </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="padding-top: 40px;">7</td>
                                                                    <td><textarea class="form-control"  rows="6" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿ El Órgano Jurisdiccional antes de fijar los honorarios, solicita al REPEJ o Administración Distrital la disponibilidad del 8% para el pago de las “Pericias Penales Extraordinarias”, conforme al artículo 7,4 de la Directiva N° 003-2007-GG/PJ u otra.?</textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_SI_7" onkeyup="Valida('Peritos_judiciales_SI_7')" name="Peritos_judiciales_SI_7"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td><textarea class="form-control"  rows="2" id="Peritos_judiciales_NO_7"  onkeyup="Valida('Peritos_judiciales_NO_7')" name="Peritos_judiciales_NO_7"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                    <td>
                                                                       <div>
                                                                           <textarea class="form-control"  rows="2" id="Peritos_judiciales_Obserbaciones_7" onkeyup="Valida('Peritos_judiciales_Obserbaciones_7')" name="Peritos_judiciales_Obserbaciones_7"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                           <span class="help-block"></span>
                                                                       </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN DE LA CORTE:</h5></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td colspan="5">
                                                                        <div>
                                                                            <input type="text" class="form-control" onkeyup="Valida('Peritos_judiciales_Acciones_1')" id="Peritos_judiciales_Acciones_1" name="Peritos_judiciales_Acciones_1" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" />

                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td colspan="5">
                                                                        <div>
                                                                            <input type="text" class="form-control" onkeyup="Valida('Peritos_judiciales_Acciones_2')" id="Peritos_judiciales_Acciones_2" name="Peritos_judiciales_Acciones_2" placeholder="Escribir aqui......"  />

                                                                            <span class="help-block"></span>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <br>

                                                    </div>
                                                    <div style="width:500px; padding:3px;">

                                                        <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                            <center><p style="color: black">Firma del Presidente de la Corte<br><center><p style="color: black">Superior</p></center></p></center>
                                                        </div>
                                                        <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                            <center><p style="color: black">Firma del Jefe de la Oficina de<br><center><p style="color: black">Administración</p></center>
                                                            </p></center>

                                                        </div>

                                                    </div><br>
                                                    <div class="panel panel-color panel-dark">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">CUERPOS DEL DELITO Y EFECTOS DECOMISADOS.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <h5 style="margin-left: 10px;">INDICAR EL NUMERO DE RESOLUCION DEL TUPA Y CUADRO DEL VALOR. ASI COMO LAS DIRECTIVAS VIGENTES EN LOS ESPACIOS EN BLANCO QUE
                                                                        CORRESPONDE.</h5>
                                                                    <p style="margin-left: 10px;">Verificar el cumplimiento del Reglamento de Cosas Materia del delito y de Efectos Decomisados
                                                                        (CMDED), aprobada por R.A. N° Resolución Administrativa N° 133-2014-CE-PJ.</p>
                                                                    <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="text-align: center" width="2%;";t>Nº</th>
                                                                        <th style="padding-bottom: 10px;" width="40%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                        <th style="text-align: center" width="5%;">si</th>
                                                                        <th style="text-align: center" width="5%;">no</th>
                                                                        <th style="text-align: center" width="48%;">OBSERVACIONES</th>

                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <center><td style="padding-top: 30px;">1</td></center>
                                                                            <td><textarea class="form-control" readonly  rows="2" style="color: black;font-weight: bold; ">El Juzgado cuenta con CMDED?</textarea></td>
                                                                            <td><textarea class="form-control"   rows="2" id="Cuerpo_delito_efectos_SI_1" onkeyup="Valida('Cuerpo_delito_efectos_SI_1')" name="Cuerpo_delito_efectos_SI_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                            <td><textarea class="form-control"   rows="2" id="Cuerpo_delito_efectos_NO_1"  onkeyup="Valida('Cuerpo_delito_efectos_NO_1')" name="Cuerpo_delito_efectos_NO_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"   rows="2" id="Cuerpo_delito_efectos_Observaciones_1" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_1')" name="Cuerpo_delito_efectos_Observaciones_1"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                               </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 90px;">2</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Se remiten al Almacén las CMDED, dentro de las 72 horas de apertura de la instrucción?</textarea>
                                                                                <hr size="2" color="black">
                                                                                <textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Utilizan la Boleta de Internamiento firmada por el Secretario y Magistrado?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_SI_2_1" onkeyup="Valida('Cuerpo_delito_efectos_SI_2_1')" name="Cuerpo_delito_efectos_SI_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_SI_2_2')" id="Cuerpo_delito_efectos_SI_2_2" name="Cuerpo_delito_efectos_SI_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_NO_2_1" onkeyup="Valida('Cuerpo_delito_efectos_NO_2_1')"  name="Cuerpo_delito_efectos_NO_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_NO_2_2" onkeyup="Valida('Cuerpo_delito_efectos_NO_2_2')" name="Cuerpo_delito_efectos_NO_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_2_1')" rows="2" id="Cuerpo_delito_efectos_Observaciones_2_1" name="Cuerpo_delito_efectos_Observaciones_2_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>


                                                                                <hr>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_2_2')" id="Cuerpo_delito_efectos_Observaciones_2_2" name="Cuerpo_delito_efectos_Observaciones_2_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                              </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 40px;">3</td>
                                                                            <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >El encargado del Almacén, ¿Emite reporte a los Órganos Jurisdiccionales, sobre las CMDED que ingresaron por disposición de sus despachos?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_SI_3')" id="Cuerpo_delito_efectos_SI_3" name="Cuerpo_delito_efectos_SI_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_NO_3')" id="Cuerpo_delito_efectos_NO_3" name="Cuerpo_delito_efectos_NO_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>

                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="3" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_3')" id="Cuerpo_delito_efectos_Observaciones_3" name="Cuerpo_delito_efectos_Observaciones_3"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                              </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 90px;">4</td>
                                                                            <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Se detectaron CMDED que figuran en la denuncia fiscal y que no fueron puestos a disposición del Juzgado por parte de la Policía Nacional y el Ministerio Publico?</textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Si la respuesta es afirmativa, indicar las acciones adoptadas.</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_SI_4_1" onkeyup="Valida('Cuerpo_delito_efectos_SI_4_1')" name="Cuerpo_delito_efectos_SI_4_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_SI_4_2')"  id="Cuerpo_delito_efectos_SI_4_2" name="Cuerpo_delito_efectos_SI_4_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_NO_4_1" onkeyup="Valida('Cuerpo_delito_efectos_NO_4_1')" name="Cuerpo_delito_efectos_NO_4_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" onkeyup="Valida('Cuerpo_delito_efectos_NO_4_2')" id="Cuerpo_delito_efectos_NO_4_2" name="Cuerpo_delito_efectos_NO_4_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_Observaciones_4_1" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_4_1')"  name="Cuerpo_delito_efectos_Observaciones_4_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                    <span class="help-block"></span>

                                                                                </div>
                                                                                <hr>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_Observaciones_4_2"  onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_4_2')"  name="Cuerpo_delito_efectos_Observaciones_4_2"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                                </td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">5</td>
                                                                            <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Se cumple con remitir a la DISCAMEC las armas de fuego, municiones y explosivos incautados por el Juzgado?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_SI_5" name="Cuerpo_delito_efectos_SI_5"  onkeyup="Valida('Cuerpo_delito_efectos_SI_5')" style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_NO_5" name="Cuerpo_delito_efectos_NO_5"   onkeyup="Valida('Cuerpo_delito_efectos_NO_5')" style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control"  rows="2" id="Cuerpo_delito_efectos_Observaciones_5" name="Cuerpo_delito_efectos_Observaciones_5"  onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_5')"   style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                                </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td style="padding-top: 40px;">6</td>
                                                                            <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Se informa al Encargado del Almacén de CMDED los procesos fenecidos, en el día, para computar los seis meses que permitan el remate y disposición de los mismos?</textarea></td>
                                                                            <td><textarea class="form-control"  onkeyup="Valida('Cuerpo_delito_efectos_SI_6')"  rows="2" id="Cuerpo_delito_efectos_SI_6" name="Cuerpo_delito_efectos_SI_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  onkeyup="Valida('Cuerpo_delito_efectos_NO_6')"  rows="2" id="Cuerpo_delito_efectos_NO_6" name="Cuerpo_delito_efectos_NO_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td>
                                                                                <div>
                                                                                    <textarea class="form-control" onkeyup="Valida('Cuerpo_delito_efectos_Observaciones_6')" rows="2" id="Cuerpo_delito_efectos_Observaciones_6" name="Cuerpo_delito_efectos_Observaciones_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea>
                                                                                    <span class="help-block"></span>
                                                                                </div>

                                                                               </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN DE LA CORTE:</h5></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="Valida('Cuerpo_delito_efectos_ACCIONES_1')" id="Cuerpo_delito_efectos_ACCIONES_1" name="Cuerpo_delito_efectos_ACCIONES_1" placeholder="Escribir aqui......"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control"  onkeyup="Valida('Cuerpo_delito_efectos_ACCIONES_2')" id="Cuerpo_delito_efectos_ACCIONES_2" name="Cuerpo_delito_efectos_ACCIONES_2" placeholder="Escribir aqui......"  />
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                                </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="Valida('Cuerpo_delito_efectos_ACCIONES_3')" id="Cuerpo_delito_efectos_ACCIONES_3" name="Cuerpo_delito_efectos_ACCIONES_3" placeholder="Escribir aqui......"  />
                                                                            <span class="help-block"></span>
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Presidente de la Corte<br><center><p style="color: black">Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Jefe de la Oficina de<br><center><p style="color: black">Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="panel panel-color panel-primary">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">RECAUDACION JUDICIAL</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <h4>Derechos de Tramitación (contenidos en el TUPA), Aranceles Judiciales y
                                                                        derechos por Notificación Judicial</h4><br>
                                                                    <h5 style="margin-left: 10px;">INDICAR EL NUMERO DE RESOLUCION DEL TUPA Y CUADRO DEL VALOR. ASI COMO LAS DIRECTIVAS VIGENTES EN LOS ESPACIOS EN BLANCO QUE  CORRESPONDE.</h5>
                                                                    <p style="margin-left: 10px;">Verificar el cumplimiento y aplicación del TUPA del Poder Judicial, aprobado con R.A N° 161-2015-CE-PJ, el Cuadro de Aranceles Judiciales aprobado por R.A. N° 077-2015-CE-PJ Reglamento de Aranceles Judiciales y las
                                                                        normas vigentes emitidas con relación al Derecho por Notificación Judicial”.</p>
                                                                    <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="text-align: center" width="2%;";t>Nº</th>
                                                                        <th style="padding-bottom: 10px;" width="88%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                        <th style="text-align: center" width="5%;">si</th>
                                                                        <th style="text-align: center" width="5%;">no</th>


                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td style="padding-top: 200px;">1</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Los comprobantes de pago por Derechos de Tramitación, Aranceles Judiciales y Derecho por Notificación Judicial Contienen las formalidades de la R. A. N° 077-2015-CE-PJ como.</textarea>
                                                                                <hr size="2" color="black";><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Sello de UTILIZADA</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Sello fechador</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Datos de quien lo presenta y que se consignan en el dorso del original y de la copia (nombre, documento de la identidad o N° de colegiatura y firma)</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Cumplen con presentar el original y copia y copia legible del comprobante de pago.</textarea>




                                                                            </td>
                                                                            <td><textarea class="form-control"  onkeyup="Valida('Recaudacion_judicial_SI_1')" rows="2" id="Recaudacion_judicial_SI_1" name="Recaudacion_judicial_SI_1"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control" onkeyup="Valida('Recaudacion_judicial_SI_1_1')" rows="2" id="Recaudacion_judicial_SI_1_1" name="Recaudacion_judicial_SI_1_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  onkeyup="Valida('Recaudacion_judicial_SI_1_2')"  rows="2" id="Recaudacion_judicial_SI_1_2" name="Recaudacion_judicial_SI_1_2"  style="color: black;font-weight: bold;margin-top: 45px; " >s</textarea>
                                                                                <textarea class="form-control" onkeyup="Valida('Recaudacion_judicial_SI_1_3')"  rows="2" id="Recaudacion_judicial_SI_1_3" name="Recaudacion_judicial_SI_1_3"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>
                                                                                <textarea class="form-control"  onkeyup="Valida('Recaudacion_judicial_SI_1_4')"  rows="2" id="Recaudacion_judicial_SI_1_4" name="Recaudacion_judicial_SI_1_4"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_1')" id="Recaudacion_judicial_NO_1" name="Recaudacion_judicial_NO_1"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_1_1')" id="Recaudacion_judicial_NO_1_1" name="Recaudacion_judicial_NO_1_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_1_2')" id="Recaudacion_judicial_NO_1_2" name="Recaudacion_judicial_NO_1_2"  style="color: black;font-weight: bold;margin-top: 45px; " >s</textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_1_3')" id="Recaudacion_judicial_NO_1_3" name="Recaudacion_judicial_NO_1_3"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_1_4')"  id="Recaudacion_judicial_NO_1_4" name="Recaudacion_judicial_NO_1_4"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 200px;">2</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Cuentan con el Sistema de Validación del comprobante de pago: SINAREJ?</textarea>
                                                                                <hr size="2" color="black";><label style="color: black">Si la respuesta es negativa, cumple con remitir las copias legibles conteniendo los datos
                                                                                    indicados, a la Oficina de Administración Distrital, precisar con que periodicidad <input id="Recaudacion_judicial_periodicidad" name="Recaudacion_judicial_periodicidad" type="text" style="width: 100px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________"/>, mostrar
                                                                                    copia del ultimo oficio de remisión: Oficio N°<input id="Recaudacion_judicial_Oficio" name="Recaudacion_judicial_Oficio" type="text" style="width: 100px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="____________"/> de fecha <input  id="Recaudacion_judicial_fecha" name="Recaudacion_judicial_fecha" type="date" style="width: 150px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="________"/></label>
                                                                                <hr><label style="color: black">Si la respuesta es afirmativa, cumple con remitir el consolidado de lo ingresado, precisar la
                                                                                    periodicidad <input id="Recaudacion_judicial_afirmativa_periodicidad" name="Recaudacion_judicial_afirmativa_periodicidad"  type="text" style="width: 100px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________"/>, mostrar copia del último oficio de remisión: Oficio N°<input type="text" id="Recaudacion_judicial_afirmativa_Oficio" name="Recaudacion_judicial_afirmativa_Oficio" style="width: 100px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________"/> de
                                                                                    fecha <input type="date" id="Recaudacion_judicial_afirmativa_fecha" name="Recaudacion_judicial_afirmativa_fecha" style="width: 150px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________"/>.</label>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Nota. Las copias se deben remitir semanal o quincenalmente, según lo señalado por la Oficina de Administración, Distrital.( Precisar en este acto la periodicidad)</textarea>

                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_S1_2')" id="Recaudacion_judicial_S1_2" name="Recaudacion_judicial_S1_2"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"   onkeyup="Valida('Recaudacion_judicial_S1_2_1')" id="Recaudacion_judicial_S1_2_1" name="Recaudacion_judicial_S1_2_1"  style="color: black;font-weight: bold;margin-top: 55px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_S1_2_2')" id="Recaudacion_judicial_S1_2_2" name="Recaudacion_judicial_S1_2_2"  style="color: black;font-weight: bold;margin-top: 85px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Recaudacion_judicial_S1_2_3')" id="Recaudacion_judicial_S1_2_3" name="Recaudacion_judicial_S1_2_3"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>
                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_2')" id="Recaudacion_judicial_NO_2" name="Recaudacion_judicial_NO_2"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_2_1')" id="Recaudacion_judicial_NO_2_1" name="Recaudacion_judicial_NO_2_1"  style="color: black;font-weight: bold;margin-top: 55px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_2_2')"  id="Recaudacion_judicial_NO_2_2" name="Recaudacion_judicial_NO_2_2"  style="color: black;font-weight: bold;margin-top: 85px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Recaudacion_judicial_NO_2_3')" id="Recaudacion_judicial_NO_2_3" name="Recaudacion_judicial_NO_2_3"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 200px;">3</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿El Juzgado cuenta con expedientes fenecidos no remitidos al Archivo Central?</textarea>
                                                                                <hr size="2" color="black";><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Si la respuesta es afirmativa, detalle las razones de su no remisión.</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Nota.- Esta situación impide obtener Ingresos por los servicios prestados en el archivo, como Búsqueda, Lectura de Expedientes, Expedición de Copias, Etc.)</textarea>

                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_S1_3')" id="Recaudacion_judicial_S1_3" name="Recaudacion_judicial_S1_3"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Recaudacion_judicial_S1_3_1')" id="Recaudacion_judicial_S1_3_1" name="Recaudacion_judicial_S1_3_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Recaudacion_judicial_S1_3_2')"  id="Recaudacion_judicial_S1_3_2" name="Recaudacion_judicial_S1_3_2"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_3')"  id="Recaudacion_judicial_NO_3" name="Recaudacion_judicial_NO_3"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_3_1')"   id="Recaudacion_judicial_NO_3_1" name="Recaudacion_judicial_NO_3_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_3_2')"   id="Recaudacion_judicial_NO_3_2" name="Recaudacion_judicial_NO_3_2"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 90px;">4</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Cumplen con verificar si los montos pagados por concepto de Arancel Judicial corresponden a los fijados en el Cuadro de Valor vigente al momento de solicitar el acto procesal?</textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"   rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >De presentarse casos de aranceles judiciales diminutos, ¿Se cumple con requerir el reintegro correspondiente?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Recaudacion_judicial_S1_4"  onkeyup="Valida('Recaudacion_judicial_S1_4')" name="Recaudacion_judicial_S1_4"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2"  onkeyup="Valida('Recaudacion_judicial_S1_4_1')" id="Recaudacion_judicial_S1_4_1" name="Recaudacion_judicial_S1_4_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Recaudacion_judicial_NO_4" onkeyup="Valida('Recaudacion_judicial_NO_4')" name="Recaudacion_judicial_NO_4"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_4_1')" id="Recaudacion_judicial_NO_4_1" name="Recaudacion_judicial_NO_4_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">5</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Se verifica la presentación de los derechos por notificación judicial suficientes para notificar a todas las partes que intervienen en el proceso?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_SI_5')" id="Recaudacion_judicial_SI_5" name="Recaudacion_judicial_SI_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Recaudacion_judicial_NO_5')" id="Recaudacion_judicial_NO_5" name="Recaudacion_judicial_NO_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Presidente de la Corte<br><center><p style="color: black">Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Jefe de la Oficina de<br><center><p style="color: black">Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="panel panel-color panel-warning">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">COBRANZA DE MULTAS Y CERTIFICADOS DE DEPOSITOS JUDICIAL.</h3>
                                                        </div><div class="panel-body">
                                                            <div class="col-12"style="width: 100%;height: auto">

                                                                <div class="table-responsive">
                                                                    <h4>Derechos de Tramitación (contenidos en el TUPA), Aranceles Judiciales y
                                                                        derechos por Notificación Judicial</h4><br>
                                                                    <h5 style="margin-left: 10px;">INDICAR EL NUMERO DE RESOLUCION DEL TUPA Y CUADRO DEL VALOR. ASI COMO LAS DIRECTIVAS VIGENTES EN LOS ESPACIOS EN BLANCO QUE  CORRESPONDE.</h5>
                                                                    <p style="margin-left: 10px;">Verificar el cumplimiento del Reglamento de Cobranza de Multas (RCM), aprobado por R.A. N° 177-2014-CE-PJ y modificado con R.A. N°_____” Manual de Procedimiento del Reglamento de Cobranza de Multas Impuestas por
                                                                        el Poder Judicial”, aprobado por R.A N°_____ y la R.A. N°_______ aplicable a los Certificados de Depósito Judicial donde no se puede determinar el proceso de origen y por ende la condición de prescritos o no”.</p>
                                                                    <h6 style="margin-left: 20px;">Marca con (S) = SI o (N) = NO</h6>
                                                                    <table class="table table-bordered table-striped table-highlight">
                                                                        <thead>
                                                                        <th style="text-align: center" width="2%;";t>Nº</th>
                                                                        <th style="padding-bottom: 10px;" width="88%;">CONDICIÓN Y/O PREGUNTAS</th>
                                                                        <th style="text-align: center" width="5%;">si</th>
                                                                        <th style="text-align: center" width="5%;">no</th>


                                                                        </thead>
                                                                        <tbody>

                                                                        <tr>
                                                                            <td style="padding-top: 90px;">1</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >El Juzgado cuenta con el Libro de Registro de Multas?</textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Si la respuesta es afirmativa. ¿Llena los datos como: Nombre del multado. Monto de la Multa en URP, N° y fecha de Resolución de la Multa previo en el artículo 7° del RCM u otro? precisar.</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_SI_1"  onkeyup="Valida('Cobransas_certificados_SI_1')" name="Cobransas_certificados_SI_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_SI_1_1')" id="Cobransas_certificados_SI_1_1" name="Cobransas_certificados_SI_1_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_NO_1" onkeyup="Valida('Cobransas_certificados_NO_1')" name="Cobransas_certificados_NO_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                                <hr size="2" color="black"><textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_NO_1_1')" id="Cobransas_certificados_NO_1_1" name="Cobransas_certificados_NO_1_1"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 300px;">2</td>
                                                                            <td><label style="color: black">Si la respuesta es negativa, indicar ¿Cómo registra el Juzgado las multas impuestas y/o apertura un
                                                                                    cuaderno conteniendo los datos antes indicados?  <input id="Cobransas_certificados_respuesta_negativa" name="Cobransas_certificados_respuesta_negativa" type="text" style="width: 100px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________________________"/></label>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >En los doce últimos meses ¿Se han impuesto multas en el Juzgado?</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Si la respuesta es afirmativa a. ¿Ha cumplido con formar el cuadernillo correspondiente?</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >b. ¿El secretario de Multas informo al Juez de las multas impuestas?</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >c. ¿Se requiere al multado cumpla con pagar la multa tan pronto quede consentida y ejecutoriada la resolución que aprueba la liquidación, conforme el artículo 423° del CPC?</textarea>
                                                                                <hr><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >d. ¿Qué acciones ha realizado el Juzgado para el cobro de las multas?, precise:</textarea>

                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_2')" id="Cobransas_certificados_SI_2" name="Cobransas_certificados_SI_2"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_2_1')"  id="Cobransas_certificados_SI_2_1" name="Cobransas_certificados_SI_2_1"  style="color: black;font-weight: bold;margin-top: 50px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_SI_2_2')" id="Cobransas_certificados_SI_2_2" name="Cobransas_certificados_SI_2_2"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_2_3')" id="Cobransas_certificados_SI_2_3" name="Cobransas_certificados_SI_2_3"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_2_4')" id="Cobransas_certificados_SI_2_4" name="Cobransas_certificados_SI_2_4"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_2_5')" id="Cobransas_certificados_SI_2_5" name="Cobransas_certificados_SI_2_5"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>

                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_N0_2')" id="Cobransas_certificados_N0_2" name="Cobransas_certificados_N0_2"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_N0_2_1')" id="Cobransas_certificados_N0_2_1" name="Cobransas_certificados_N0_2_1"  style="color: black;font-weight: bold;margin-top: 50px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_N0_2_2')" id="Cobransas_certificados_N0_2_2" name="Cobransas_certificados_N0_2_2"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_N0_2_3')"  id="Cobransas_certificados_N0_2_3" name="Cobransas_certificados_N0_2_3"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_N0_2_4')" id="Cobransas_certificados_N0_2_4" name="Cobransas_certificados_N0_2_4"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_N0_2_5')" id="Cobransas_certificados_N0_2_5" name="Cobransas_certificados_N0_2_5"  style="color: black;font-weight: bold;margin-top: 40px; " ></textarea>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 150px;">3</td>
                                                                            <td><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Se informa mensualmente a la Presidencia de Corte, dentro de los 3 primeros días hábiles los reporteros con las multas impuestas y pagadas y estas a su vez son remitidos por la Administración a la Subgerencia de Recaudación Judicial?</textarea>
                                                                                <hr size="2" color="black";><label>  Si la respuesta es afirmativa, mostrar el cargo de remisión:  Oficio:N°  <input id="Cobransas_certificados_Resp_afirma_3" name="Cobransas_certificados_Resp_afirma_3" type="text" style="width: 300px;padding: 5px 10px; margin: 3px 0; display: inline-block;  border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;" placeholder="__________________________________________"/></label>
                                                                                <hr><textarea class="form-control"  rows="3" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Nota.- Los pagos deben efectuarse con CP o Boletas de Deposito, de efectuarse en CDJ deben ser inmediatamente endosados a la Subgerencia de Tesorería y remitidos a la Adm. Para su envió a la Subgerencia de Recaudación Judicial.</textarea>
                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_SI_3')" id="Cobransas_certificados_SI_3" name="Cobransas_certificados_SI_3"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_3_1')"  id="Cobransas_certificados_SI_3_1" name="Cobransas_certificados_SI_3_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2"  onkeyup="Valida('Cobransas_certificados_SI_3_2')"  id="Cobransas_certificados_SI_3_2" name="Cobransas_certificados_SI_3_2"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_NO_3')"  id="Cobransas_certificados_NO_3" name="Cobransas_certificados_NO_3"  style="color: black;font-weight: bold;margin-top: 5px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_NO_3_1')" id="Cobransas_certificados_NO_3_1" name="Cobransas_certificados_NO_3_1"  style="color: black;font-weight: bold;margin-top: 30px; " ></textarea>
                                                                                <textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_NO_3_2')" id="Cobransas_certificados_NO_3_2" name="Cobransas_certificados_NO_3_2"  style="color: black;font-weight: bold;margin-top: 45px; " ></textarea>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding-top: 30px;">4</td>
                                                                            <td><textarea class="form-control" onkeyup="Valida('Aspectos_seguridad_Extintores_Deficiencias')"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿El Juzgado cuenta con el Libro de Registro de CDJ?</textarea>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_SI_4')"  id="Cobransas_certificados_SI_4" name="Cobransas_certificados_SI_4"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>
                                                                            <td><textarea class="form-control"  rows="2" onkeyup="Valida('Cobransas_certificados_NO_4')" id="Cobransas_certificados_NO_4" name="Cobransas_certificados_NO_4"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea>

                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">5</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Existen CDJ prescriptos (con más de cinco años de concluido el proceso que les dio origen), que mantiene en custodia del encargado y que aún no ha sido remitidos a la Oficina de Administración Distrital?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_SI_5"  onkeyup="Valida('Cobransas_certificados_SI_5')" name="Cobransas_certificados_SI_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_NO_5" onkeyup="Valida('Cobransas_certificados_NO_5')" name="Cobransas_certificados_NO_5"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td style="padding-top: 40px;">6</td>
                                                                            <td><textarea class="form-control"  rows="2" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >¿Cuentan, el juez y los auxiliares jurisdiccionales, con las normas vigentes que regulan los temas antes señalados?</textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_SI_6" onkeyup="Valida('Cobransas_certificados_SI_6')" name="Cobransas_certificados_SI_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                            <td><textarea class="form-control"  rows="2" id="Cobransas_certificados_NO_6" onkeyup="Valida('Cobransas_certificados_NO_6')" name="Cobransas_certificados_NO_6"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN DE LA CORTE:</h5></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="Valida('Cobransas_certificados_ACCIONES_1')" id="Cobransas_certificados_ACCIONES_1" name="Cobransas_certificados_ACCIONES_1" placeholder="Escribir aqui......" />
                                                                                    <span class="help-block"></span>
                                                                               </div>


                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td colspan="5">
                                                                                <input type="text" class="form-control" onkeyup="Valida('Cobransas_certificados_ACCIONES_2')" id="Cobransas_certificados_ACCIONES_2" name="Cobransas_certificados_ACCIONES_2" placeholder="Escribir aqui......"  />
                                                                                <span class="help-block"></span>

                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td colspan="5">
                                                                                <div>
                                                                                    <input type="text" class="form-control" onkeyup="Valida('Cobransas_certificados_ACCIONES_3')" id="Cobransas_certificados_ACCIONES_3" name="Cobransas_certificados_ACCIONES_3" placeholder="Escribir aqui......"/>
                                                                                    <span class="help-block"></span>
                                                                                </div>
                                                                               </td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <br>

                                                            </div>
                                                            <div style="width:500px; padding:3px;">

                                                                <div style="width:245px;  float:left; margin-left: 300px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Presidente de la Corte<br><center><p style="color: black">Superior</p></center></p></center>
                                                                </div>
                                                                <div style="width:245px;   margin-left:600px;"> <hr size="10" style="color: black;font-weight: bold; margin-left: 10px" />
                                                                    <center><p style="color: black">Firma del Jefe de la Oficina de<br><center><p style="color: black">Administración</p></center>
                                                                    </p></center>

                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>

                                                </div>


                                            </div>
                                            <ul class="list-inline pull-right">

                                                <li><button type="button" class="btn btn-danger prev-step">
                                                        Anterior</button></li>
                                                <li><button type="button" id="valida" onclick="hahah();" class="btn btn-success btn-info-full next-step">Enviar Encuesta</button></li>


                                            </ul>


                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>

                @break
                @case($d->estado != 2)
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-dark ">
                                <div class="panel-body">

                                    <div class="ex-page-content text-center">
                                        <h2 class="texto_3d">GRACIAS POR RELLENAR </h2>
                                        <h2 class="texto_3d">ESTA ENCUESTA </h2>
                                        <h2 class="texto_3d">SR: <label>{{Auth::user()->nombre}} {{Auth::user()->Apellidos}}</label> </h2>

                                        <h3 class="text-center m-t-0 m-b-15" > <img src="{{asset('assets/images/LIKE.png')}}" style="width: 200px"></h3>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @break

            @endswitch
        @endforeach




    @endsection
@section('script')
<script>
    function hahah() {


        var Peritos_judiciales_SI_1 = $('#Peritos_judiciales_SI_1').val();
        var Peritos_judiciales_NO_1 = $('#Peritos_judiciales_NO_1').val();
        var Peritos_judiciales_Obserbaciones_1 = $('#Peritos_judiciales_Obserbaciones_1').val();
        var Peritos_judiciales_SI_2_1 = $('#Peritos_judiciales_SI_2_1').val();
        var Peritos_judiciales_SI_2_2 = $('#Peritos_judiciales_SI_2_2').val();
        var Peritos_judiciales_NO_2_1 = $('#Peritos_judiciales_NO_2_1').val();
        var Peritos_judiciales_NO_2_2 = $('#Peritos_judiciales_NO_2_2').val();
        var Peritos_judiciales_Obserbaciones_2_1 = $('#Peritos_judiciales_Obserbaciones_2_1').val();
        var Peritos_judiciales_Obserbaciones_2_2 = $('#Peritos_judiciales_Obserbaciones_2_2').val();
        var Peritos_judiciales_SI_3 = $('#Peritos_judiciales_SI_3').val();
        var Peritos_judiciales_NO_3 = $('#Peritos_judiciales_NO_3').val();
        var Peritos_judiciales_Obserbaciones_3 = $('#Peritos_judiciales_Obserbaciones_3').val();
        var Peritos_judiciales_SI_4 = $('#Peritos_judiciales_SI_4').val();
        var Peritos_judiciales_NO_4 = $('#Peritos_judiciales_NO_4').val();
        var Peritos_judiciales_Obserbaciones_4 = $('#Peritos_judiciales_Obserbaciones_4').val();
        var Peritos_judiciales_SI_5 = $('#Peritos_judiciales_SI_5').val();
        var Peritos_judiciales_NO_5 = $('#Peritos_judiciales_NO_5').val();
        var Peritos_judiciales_Obserbaciones_5 = $('#Peritos_judiciales_Obserbaciones_5').val();
        var Peritos_judiciales_SI_6_1 = $('#Peritos_judiciales_SI_6_1').val();
        var Peritos_judiciales_SI_6_2 = $('#Peritos_judiciales_SI_6_2').val();
        var Peritos_judiciales_NO_6_1 = $('#Peritos_judiciales_NO_6_1').val();
        var Peritos_judiciales_NO_6_2 = $('#Peritos_judiciales_NO_6_2').val();
        var Peritos_judiciales_Obserbaciones_6_1 = $('#Peritos_judiciales_Obserbaciones_6_1').val();
        var Peritos_judiciales_Obserbaciones_6_2 = $('#Peritos_judiciales_Obserbaciones_6_2').val();

        var Peritos_judiciales_SI_7 = $('#Peritos_judiciales_SI_7').val();
        var Peritos_judiciales_NO_7 = $('#Peritos_judiciales_NO_7').val();
        var Peritos_judiciales_Obserbaciones_7 = $('#Peritos_judiciales_Obserbaciones_7').val();
        var Peritos_judiciales_Acciones_1 = $('#Peritos_judiciales_Acciones_1').val();
        var Peritos_judiciales_Acciones_2 = $('#Peritos_judiciales_Acciones_2').val();
        //fin peritos judiciales

        var Cuerpo_delito_efectos_SI_1 = $('#Cuerpo_delito_efectos_SI_1').val();
        var Cuerpo_delito_efectos_NO_1 = $('#Cuerpo_delito_efectos_NO_1').val();
        var Cuerpo_delito_efectos_Observaciones_1 = $('#Cuerpo_delito_efectos_Observaciones_1').val();
        var Cuerpo_delito_efectos_SI_2_1 = $('#Cuerpo_delito_efectos_SI_2_1').val();
        var Cuerpo_delito_efectos_SI_2_2 = $('#Cuerpo_delito_efectos_SI_2_2').val();
        var Cuerpo_delito_efectos_NO_2_1 = $('#Cuerpo_delito_efectos_NO_2_1').val();
        var Cuerpo_delito_efectos_NO_2_2 = $('#Cuerpo_delito_efectos_NO_2_2').val();
        var Cuerpo_delito_efectos_Observaciones_2_1 = $('#Cuerpo_delito_efectos_Observaciones_2_1').val();
        var Cuerpo_delito_efectos_Observaciones_2_2 = $('#Cuerpo_delito_efectos_Observaciones_2_2').val();
        var Cuerpo_delito_efectos_SI_3 = $('#Cuerpo_delito_efectos_SI_3').val();
        var Cuerpo_delito_efectos_NO_3 = $('#Cuerpo_delito_efectos_NO_3').val();
        var Cuerpo_delito_efectos_Observaciones_3 = $('#Cuerpo_delito_efectos_Observaciones_3').val();

        var Cuerpo_delito_efectos_SI_4_1 = $('#Cuerpo_delito_efectos_SI_4_1').val();
        var Cuerpo_delito_efectos_SI_4_2 = $('#Cuerpo_delito_efectos_SI_4_2').val();
        var Cuerpo_delito_efectos_NO_4_1 = $('#Cuerpo_delito_efectos_NO_4_1').val();
        var Cuerpo_delito_efectos_NO_4_2 = $('#Cuerpo_delito_efectos_NO_4_2').val();
        var Cuerpo_delito_efectos_Observaciones_4_1 = $('#Cuerpo_delito_efectos_Observaciones_4_1').val();
        var Cuerpo_delito_efectos_Observaciones_4_2 = $('#Cuerpo_delito_efectos_Observaciones_4_2').val();
        var Cuerpo_delito_efectos_SI_5 = $('#Cuerpo_delito_efectos_SI_5').val();
        var Cuerpo_delito_efectos_NO_5 = $('#Cuerpo_delito_efectos_NO_5').val();
        var Cuerpo_delito_efectos_Observaciones_5 = $('#Cuerpo_delito_efectos_Observaciones_5').val();
        var Cuerpo_delito_efectos_SI_6 = $('#Cuerpo_delito_efectos_SI_6').val();
        var Cuerpo_delito_efectos_NO_6 = $('#Cuerpo_delito_efectos_NO_6').val();
        var Cuerpo_delito_efectos_Observaciones_6 = $('#Cuerpo_delito_efectos_Observaciones_6').val();

        var Cuerpo_delito_efectos_ACCIONES_1 = $('#Cuerpo_delito_efectos_ACCIONES_1').val();
        var Cuerpo_delito_efectos_ACCIONES_2 = $('#Cuerpo_delito_efectos_ACCIONES_2').val();
        var Cuerpo_delito_efectos_ACCIONES_3 = $('#Cuerpo_delito_efectos_ACCIONES_3').val();

        //fin cuerpo del delito


        var Recaudacion_judicial_SI_1 = $('#Recaudacion_judicial_SI_1').val();
        var Recaudacion_judicial_SI_1_1 = $('#Recaudacion_judicial_SI_1_1').val();
        var Recaudacion_judicial_SI_1_2 = $('#Recaudacion_judicial_SI_1_2').val();
        var Recaudacion_judicial_SI_1_3 = $('#Recaudacion_judicial_SI_1_3').val();
        var Recaudacion_judicial_SI_1_4 = $('#Recaudacion_judicial_SI_1_4').val();
        var Recaudacion_judicial_NO_1 = $('#Recaudacion_judicial_NO_1').val();
        var Recaudacion_judicial_NO_1_1 = $('#Recaudacion_judicial_NO_1_1').val();
        var Recaudacion_judicial_NO_1_2 = $('#Recaudacion_judicial_NO_1_2').val();
        var Recaudacion_judicial_NO_1_3 = $('#Recaudacion_judicial_NO_1_3').val();
        var Recaudacion_judicial_NO_1_4 = $('#Recaudacion_judicial_NO_1_4').val();
        var Recaudacion_judicial_S1_2 = $('#Recaudacion_judicial_S1_2').val();
        var Recaudacion_judicial_S1_2_1 = $('#Recaudacion_judicial_S1_2_1').val();
        var Recaudacion_judicial_S1_2_2 = $('#Recaudacion_judicial_S1_2_2').val();
        var Recaudacion_judicial_S1_2_3 = $('#Recaudacion_judicial_S1_2_3').val();
        var Recaudacion_judicial_NO_2 = $('#Recaudacion_judicial_NO_2').val();
        var Recaudacion_judicial_NO_2_1 = $('#Recaudacion_judicial_NO_2_1').val();
        var Recaudacion_judicial_NO_2_2 = $('#Recaudacion_judicial_NO_2_2').val();
        var Recaudacion_judicial_NO_2_3 = $('#Recaudacion_judicial_NO_2_3').val();
        var Recaudacion_judicial_S1_3 = $('#Recaudacion_judicial_S1_3').val();
        var Recaudacion_judicial_S1_3_1 = $('#Recaudacion_judicial_S1_3_1').val();
        var Recaudacion_judicial_S1_3_2 = $('#Recaudacion_judicial_S1_3_2').val();
        var Recaudacion_judicial_NO_3 = $('#Recaudacion_judicial_NO_3').val();
        var Recaudacion_judicial_NO_3_1 = $('#Recaudacion_judicial_NO_3_1').val();
        var Recaudacion_judicial_NO_3_2 = $('#Recaudacion_judicial_NO_3_2').val();

        var Recaudacion_judicial_S1_4 = $('#Recaudacion_judicial_S1_4').val();
        var Recaudacion_judicial_S1_4_1 = $('#Recaudacion_judicial_S1_4_1').val();
        var Recaudacion_judicial_NO_4 = $('#Recaudacion_judicial_NO_4').val();
        var Recaudacion_judicial_NO_4_1 = $('#Recaudacion_judicial_NO_4_1').val();
        var Recaudacion_judicial_SI_5 = $('#Recaudacion_judicial_SI_5').val();
        var Recaudacion_judicial_NO_5 = $('#Recaudacion_judicial_NO_5').val();

        //fin recaudacion judicial
        var Cobransas_certificados_SI_1 = $('#Cobransas_certificados_SI_1').val();
        var Cobransas_certificados_SI_1_1 = $('#Cobransas_certificados_SI_1_1').val();
        var Cobransas_certificados_NO_1 = $('#Cobransas_certificados_NO_1').val();
        var Cobransas_certificados_NO_1_1 = $('#Cobransas_certificados_NO_1_1').val();
        var Cobransas_certificados_SI_2 = $('#Cobransas_certificados_SI_2').val();
        var Cobransas_certificados_SI_2_1 = $('#Cobransas_certificados_SI_2_1').val();
        var Cobransas_certificados_SI_2_2 = $('#Cobransas_certificados_SI_2_2').val();
        var Cobransas_certificados_SI_2_3 = $('#Cobransas_certificados_SI_2_3').val();
        var Cobransas_certificados_SI_2_4 = $('#Cobransas_certificados_SI_2_4').val();
        var Cobransas_certificados_SI_2_5 = $('#Cobransas_certificados_SI_2_5').val();
        var Cobransas_certificados_N0_2 = $('#Cobransas_certificados_N0_2').val();
        var Cobransas_certificados_N0_2_1 = $('#Cobransas_certificados_N0_2_1').val();
        var Cobransas_certificados_N0_2_2 = $('#Cobransas_certificados_N0_2_2').val();
        var Cobransas_certificados_N0_2_3 = $('#Cobransas_certificados_N0_2_3').val();
        var Cobransas_certificados_N0_2_4 = $('#Cobransas_certificados_N0_2_4').val();
        var Cobransas_certificados_N0_2_5 = $('#Cobransas_certificados_N0_2_5').val();
        var Cobransas_certificados_SI_3 = $('#Cobransas_certificados_SI_3').val();
        var Cobransas_certificados_SI_3_1 = $('#Cobransas_certificados_SI_3_1').val();
        var Cobransas_certificados_SI_3_2 = $('#Cobransas_certificados_SI_3_2').val();
        var Cobransas_certificados_NO_3 = $('#Cobransas_certificados_NO_3').val();
        var Cobransas_certificados_NO_3_1 = $('#Cobransas_certificados_NO_3_1').val();
        var Cobransas_certificados_NO_3_2=$('#Cobransas_certificados_NO_3_2').val();
        var Cobransas_certificados_SI_4 = $('#Cobransas_certificados_SI_4').val();
        var Cobransas_certificados_NO_4 = $('#Cobransas_certificados_NO_4').val();
        var Cobransas_certificados_SI_5 = $('#Cobransas_certificados_SI_5').val();

        var Cobransas_certificados_NO_5 = $('#Cobransas_certificados_NO_5').val();
        var Cobransas_certificados_SI_6 = $('#Cobransas_certificados_SI_6').val();
        var Cobransas_certificados_NO_6 = $('#Cobransas_certificados_NO_6').val();
        var Cobransas_certificados_ACCIONES_1 = $('#Cobransas_certificados_ACCIONES_1').val();
        var Cobransas_certificados_ACCIONES_2 = $('#Cobransas_certificados_ACCIONES_2').val();
        var Cobransas_certificados_ACCIONES_3 = $('#Cobransas_certificados_ACCIONES_3').val();


        if(
            Peritos_judiciales_SI_1=== '' && Peritos_judiciales_NO_1 === ''  ||
            Peritos_judiciales_Obserbaciones_1 === '' || Peritos_judiciales_SI_2_1===''
            && Peritos_judiciales_NO_2_1 ===''
            || Peritos_judiciales_SI_2_2===''
            && Peritos_judiciales_NO_2_2===''
            || Peritos_judiciales_Obserbaciones_2_1===''
            || Peritos_judiciales_Obserbaciones_2_2===''
            ||  Peritos_judiciales_SI_3==='' && Peritos_judiciales_NO_3===''
            || Peritos_judiciales_Obserbaciones_3==='' ||
            Peritos_judiciales_SI_4 ==='' && Peritos_judiciales_NO_4 ==='' ||
            Peritos_judiciales_Obserbaciones_4==='' ||

            Peritos_judiciales_SI_5==='' && Peritos_judiciales_NO_5===''||
            Peritos_judiciales_Obserbaciones_5==='' || Peritos_judiciales_SI_6_1==='' && Peritos_judiciales_NO_6_1==='' ||
            Peritos_judiciales_SI_6_2==='' && Peritos_judiciales_NO_6_2==='' ||
            Peritos_judiciales_Obserbaciones_6_1==='' ||
            Peritos_judiciales_Obserbaciones_6_2==='' ||
            Peritos_judiciales_SI_7==='' &&  Peritos_judiciales_NO_7==='' ||
            Peritos_judiciales_Obserbaciones_7==='' ||
            Peritos_judiciales_Acciones_1===''||
            Peritos_judiciales_Acciones_2==='' ||
            //fin peritos judiciales

            Cuerpo_delito_efectos_SI_1==='' && Cuerpo_delito_efectos_NO_1==='' ||
            Cuerpo_delito_efectos_Observaciones_1===''
            || Cuerpo_delito_efectos_SI_2_1==='' && Cuerpo_delito_efectos_NO_2_1===''
            || Cuerpo_delito_efectos_SI_2_2===''  && Cuerpo_delito_efectos_NO_2_2==='' ||
            Cuerpo_delito_efectos_Observaciones_2_1==='' || Cuerpo_delito_efectos_Observaciones_2_2==='' ||

            Cuerpo_delito_efectos_SI_3==='' && Cuerpo_delito_efectos_NO_3==='' ||
            Cuerpo_delito_efectos_Observaciones_3==='' ||

            Cuerpo_delito_efectos_SI_4_1 ===''  && Cuerpo_delito_efectos_NO_4_1==='' ||

            Cuerpo_delito_efectos_SI_4_2 ==='' && Cuerpo_delito_efectos_NO_4_2==='' ||

            Cuerpo_delito_efectos_Observaciones_4_1==='' || Cuerpo_delito_efectos_Observaciones_4_2===''  ||

            Cuerpo_delito_efectos_SI_5==='' && Cuerpo_delito_efectos_NO_5==='' ||

            Cuerpo_delito_efectos_Observaciones_5 === '' ||

            Cuerpo_delito_efectos_SI_6 ==='' && Cuerpo_delito_efectos_NO_6===''||
            Cuerpo_delito_efectos_Observaciones_6==='' ||

            Cuerpo_delito_efectos_ACCIONES_1===''||  Cuerpo_delito_efectos_ACCIONES_2 ==='' || Cuerpo_delito_efectos_ACCIONES_3=== ''  ||
//fin cuepro delito

             Recaudacion_judicial_SI_1 ==='' &&  Recaudacion_judicial_NO_1 ==='' ||
            Recaudacion_judicial_SI_1_1=== '' && Recaudacion_judicial_NO_1_1==='' ||
            Recaudacion_judicial_SI_1_2=== '' && Recaudacion_judicial_NO_1_2==='' ||
            Recaudacion_judicial_SI_1_3==='' &&  Recaudacion_judicial_NO_1_3==='' ||
            Recaudacion_judicial_SI_1_4==='' &&  Recaudacion_judicial_NO_1_4==='' ||
            Recaudacion_judicial_S1_2==='' &&   Recaudacion_judicial_NO_2==='' ||
            Recaudacion_judicial_S1_2_1 ==='' && Recaudacion_judicial_NO_2_1==='' ||
            Recaudacion_judicial_S1_2_2==='' && Recaudacion_judicial_NO_2_2==='' ||
            Recaudacion_judicial_S1_2_3==='' &&  Recaudacion_judicial_NO_2_3==='' ||
            Recaudacion_judicial_S1_3==='' &&  Recaudacion_judicial_NO_3==='' ||
            Recaudacion_judicial_S1_3_1==='' && Recaudacion_judicial_NO_3_1==='' ||
            Recaudacion_judicial_S1_3_2=== '' && Recaudacion_judicial_NO_3_2==='' ||
            Recaudacion_judicial_S1_4==='' && Recaudacion_judicial_NO_4===''||
            Recaudacion_judicial_S1_4_1==='' && Recaudacion_judicial_NO_4_1==='' ||
            Recaudacion_judicial_SI_5===''&& Recaudacion_judicial_NO_5===''  ||
            //fin Recaudacion judicial

             Cobransas_certificados_SI_1==='' && Cobransas_certificados_NO_1==='' ||
            Cobransas_certificados_SI_1_1==='' && Cobransas_certificados_NO_1_1==='' ||
            Cobransas_certificados_SI_2==='' && Cobransas_certificados_N0_2===''||
            Cobransas_certificados_SI_2_1==='' && Cobransas_certificados_N0_2_1==='' ||
            Cobransas_certificados_SI_2_2==='' && Cobransas_certificados_N0_2_2===''||
            Cobransas_certificados_SI_2_3==='' && Cobransas_certificados_N0_2_3==='' ||
            Cobransas_certificados_SI_2_4===''&& Cobransas_certificados_N0_2_4===''||
            Cobransas_certificados_SI_2_5==='' && Cobransas_certificados_N0_2_5===''||
            Cobransas_certificados_SI_3==='' && Cobransas_certificados_NO_3===''||
            Cobransas_certificados_NO_3_1==='' &&Cobransas_certificados_NO_3_1===''||
            Cobransas_certificados_SI_3_2==='' && Cobransas_certificados_NO_3_2===''||
            Cobransas_certificados_SI_4==='' && Cobransas_certificados_NO_4===''||
            Cobransas_certificados_SI_5==='' && Cobransas_certificados_NO_5==='' ||
            Cobransas_certificados_SI_6=== '' && Cobransas_certificados_NO_6===''||
            Cobransas_certificados_ACCIONES_1==='' || Cobransas_certificados_ACCIONES_2===''||
            Cobransas_certificados_ACCIONES_3===''
























































    ){

            Peritos_judiciales_SI_1=Valida('Peritos_judiciales_SI_1');
            Peritos_judiciales_NO_1=Valida('Peritos_judiciales_NO_1');
            Peritos_judiciales_Obserbaciones_1=Valida('Peritos_judiciales_Obserbaciones_1');
            Peritos_judiciales_SI_2_1=Valida('Peritos_judiciales_SI_2_1');
            Peritos_judiciales_SI_2_2=Valida('Peritos_judiciales_SI_2_2');
            Peritos_judiciales_NO_2_1=Valida('Peritos_judiciales_NO_2_1');
            Peritos_judiciales_NO_2_2=Valida('Peritos_judiciales_NO_2_2');
            Peritos_judiciales_Obserbaciones_2_1=Valida('Peritos_judiciales_Obserbaciones_2_1');
            Peritos_judiciales_Obserbaciones_2_2=Valida('Peritos_judiciales_Obserbaciones_2_2');

            Peritos_judiciales_SI_3=Valida('Peritos_judiciales_SI_3');
            Peritos_judiciales_NO_3=Valida('Peritos_judiciales_NO_3');
            Peritos_judiciales_Obserbaciones_3=Valida('Peritos_judiciales_Obserbaciones_3');
            Peritos_judiciales_SI_4=Valida('Peritos_judiciales_SI_4');
            Peritos_judiciales_NO_4=Valida('Peritos_judiciales_NO_4');
            Peritos_judiciales_Obserbaciones_4=Valida('Peritos_judiciales_Obserbaciones_4');

            Peritos_judiciales_SI_5=Valida('Peritos_judiciales_SI_5');
            Peritos_judiciales_NO_5=Valida('Peritos_judiciales_NO_5');
            Peritos_judiciales_Obserbaciones_5=Valida('Peritos_judiciales_Obserbaciones_5');
            Peritos_judiciales_SI_6_1=Valida('Peritos_judiciales_SI_6_1');
            Peritos_judiciales_SI_6_2=Valida('Peritos_judiciales_SI_6_2');
            Peritos_judiciales_NO_6_1=Valida('Peritos_judiciales_NO_6_1');
            Peritos_judiciales_NO_6_2=Valida('Peritos_judiciales_NO_6_2');
            Peritos_judiciales_Obserbaciones_6_1=Valida('Peritos_judiciales_Obserbaciones_6_1');
            Peritos_judiciales_Obserbaciones_6_2=Valida('Peritos_judiciales_Obserbaciones_6_2');
            Peritos_judiciales_SI_7=Valida('Peritos_judiciales_SI_7');
            Peritos_judiciales_NO_7=Valida('Peritos_judiciales_NO_7');
            Peritos_judiciales_Obserbaciones_7=Valida('Peritos_judiciales_Obserbaciones_7');
            Peritos_judiciales_Acciones_1=Valida('Peritos_judiciales_Acciones_1');
            Peritos_judiciales_Acciones_2=Valida('Peritos_judiciales_Acciones_2');
            //fin peritos

            Cuerpo_delito_efectos_SI_1=Valida('Cuerpo_delito_efectos_SI_1');
            Cuerpo_delito_efectos_NO_1=Valida('Cuerpo_delito_efectos_NO_1');
            Cuerpo_delito_efectos_Observaciones_1=Valida('Cuerpo_delito_efectos_Observaciones_1');
            Cuerpo_delito_efectos_SI_2_1=Valida('Cuerpo_delito_efectos_SI_2_1');
            Cuerpo_delito_efectos_SI_2_2=Valida('Cuerpo_delito_efectos_SI_2_2');
            Cuerpo_delito_efectos_NO_2_1=Valida('Cuerpo_delito_efectos_NO_2_1');
            Cuerpo_delito_efectos_NO_2_2=Valida('Cuerpo_delito_efectos_NO_2_2');
            Cuerpo_delito_efectos_Observaciones_2_1=Valida('Cuerpo_delito_efectos_Observaciones_2_1');
            Cuerpo_delito_efectos_Observaciones_2_2=Valida('Cuerpo_delito_efectos_Observaciones_2_2');

            Cuerpo_delito_efectos_SI_3=Valida('Cuerpo_delito_efectos_SI_3');
            Cuerpo_delito_efectos_NO_3=Valida('Cuerpo_delito_efectos_NO_3');
            Cuerpo_delito_efectos_Observaciones_3=Valida('Cuerpo_delito_efectos_Observaciones_3');
            Cuerpo_delito_efectos_SI_4_1=Valida('Cuerpo_delito_efectos_SI_4_1');
            Cuerpo_delito_efectos_SI_4_2=Valida('Cuerpo_delito_efectos_SI_4_2');
            Cuerpo_delito_efectos_NO_4_1=Valida('Cuerpo_delito_efectos_NO_4_1');
            Cuerpo_delito_efectos_NO_4_2=Valida('Cuerpo_delito_efectos_NO_4_2');
            Cuerpo_delito_efectos_Observaciones_4_1=Valida('Cuerpo_delito_efectos_Observaciones_4_1');
            Cuerpo_delito_efectos_Observaciones_4_2=Valida('Cuerpo_delito_efectos_Observaciones_4_2');

            Cuerpo_delito_efectos_SI_5=Valida('Cuerpo_delito_efectos_SI_5');
            Cuerpo_delito_efectos_NO_5=Valida('Cuerpo_delito_efectos_NO_5');
            Cuerpo_delito_efectos_Observaciones_5=Valida('Cuerpo_delito_efectos_Observaciones_5');
            Cuerpo_delito_efectos_SI_6=Valida('Cuerpo_delito_efectos_SI_6');
            Cuerpo_delito_efectos_NO_6=Valida('Cuerpo_delito_efectos_NO_6');
            Cuerpo_delito_efectos_Observaciones_6=Valida('Cuerpo_delito_efectos_Observaciones_6');

            Cuerpo_delito_efectos_ACCIONES_1=Valida('Cuerpo_delito_efectos_ACCIONES_1');
            Cuerpo_delito_efectos_ACCIONES_2=Valida('Cuerpo_delito_efectos_ACCIONES_2');
            Cuerpo_delito_efectos_ACCIONES_3=Valida('Cuerpo_delito_efectos_ACCIONES_3');
            //fin cuerpo delito


             Recaudacion_judicial_SI_1=Valida('Recaudacion_judicial_SI_1');
             Recaudacion_judicial_SI_1_1=Valida('Recaudacion_judicial_SI_1_1');
             Recaudacion_judicial_SI_1_2=Valida('Recaudacion_judicial_SI_1_2');
             Recaudacion_judicial_SI_1_3=Valida('Recaudacion_judicial_SI_1_3');
             Recaudacion_judicial_SI_1_4=Valida('Recaudacion_judicial_SI_1_4');

             Recaudacion_judicial_NO_1=Valida('Recaudacion_judicial_NO_1');
             Recaudacion_judicial_NO_1_1=Valida('Recaudacion_judicial_NO_1_1');
             Recaudacion_judicial_NO_1_2=Valida('Recaudacion_judicial_NO_1_2');
             Recaudacion_judicial_NO_1_3=Valida('Recaudacion_judicial_NO_1_3');
             Recaudacion_judicial_NO_1_4 =Valida('Recaudacion_judicial_NO_1_4');
             Recaudacion_judicial_S1_2=Valida('Recaudacion_judicial_S1_2');

             Recaudacion_judicial_S1_2_1=Valida('Recaudacion_judicial_S1_2_1');
             Recaudacion_judicial_S1_2_2=Valida('Recaudacion_judicial_S1_2_2');
             Recaudacion_judicial_S1_2_3 =Valida('Recaudacion_judicial_S1_2_3');
             Recaudacion_judicial_NO_2 =Valida('Recaudacion_judicial_NO_2');
             Recaudacion_judicial_NO_2_1 =Valida('Recaudacion_judicial_NO_2_1');
             Recaudacion_judicial_NO_2_2 =Valida('Recaudacion_judicial_NO_2_2');
             Recaudacion_judicial_NO_2_3 =Valida('Recaudacion_judicial_NO_2_3');
             Recaudacion_judicial_S1_3 = Valida('Recaudacion_judicial_S1_3');

             Recaudacion_judicial_S1_3_1 = Valida('Recaudacion_judicial_S1_3_1');
             Recaudacion_judicial_S1_3_2 = Valida('Recaudacion_judicial_S1_3_2');
             Recaudacion_judicial_NO_3 = Valida('Recaudacion_judicial_NO_3');
             Recaudacion_judicial_NO_3_1 = Valida('Recaudacion_judicial_NO_3_1');
             Recaudacion_judicial_NO_3_2= Valida('Recaudacion_judicial_NO_3_2');

             Recaudacion_judicial_S1_4 = Valida('Recaudacion_judicial_S1_4');
             Recaudacion_judicial_S1_4_1 = Valida('Recaudacion_judicial_S1_4_1');
             Recaudacion_judicial_NO_4= Valida('Recaudacion_judicial_NO_4');
             Recaudacion_judicial_NO_4_1 = Valida('Recaudacion_judicial_NO_4_1');
             Recaudacion_judicial_SI_5 = Valida('Recaudacion_judicial_SI_5');
             Recaudacion_judicial_NO_5 = Valida('Recaudacion_judicial_NO_5');
//fin recaudacuon judicial
            Cobransas_certificados_SI_1 = Valida('Cobransas_certificados_SI_1');
            Cobransas_certificados_SI_1_1 = Valida('Cobransas_certificados_SI_1_1');
            Cobransas_certificados_NO_1 = Valida('Cobransas_certificados_NO_1');
            Cobransas_certificados_NO_1_1 = Valida('Cobransas_certificados_NO_1_1');
            Cobransas_certificados_SI_2 = Valida('Cobransas_certificados_SI_2');
            Cobransas_certificados_SI_2_1 = Valida('Cobransas_certificados_SI_2_1');

            Cobransas_certificados_SI_2_2 = Valida('Cobransas_certificados_SI_2_2');
            Cobransas_certificados_SI_2_3 = Valida('Cobransas_certificados_SI_2_3');
            Cobransas_certificados_SI_2_4 = Valida('Cobransas_certificados_SI_2_4');
            Cobransas_certificados_SI_2_5 = Valida('Cobransas_certificados_SI_2_5');
            Cobransas_certificados_N0_2 = Valida('Cobransas_certificados_N0_2');
            Cobransas_certificados_N0_2_1 = Valida('Cobransas_certificados_N0_2_1');
            Cobransas_certificados_N0_2_2 = Valida('Cobransas_certificados_N0_2_2');
            Cobransas_certificados_N0_2_3 = Valida('Cobransas_certificados_N0_2_3');

            Cobransas_certificados_N0_2_4 = Valida('Cobransas_certificados_N0_2_4');
            Cobransas_certificados_N0_2_5 = Valida('Cobransas_certificados_N0_2_5');
            Cobransas_certificados_SI_3 = Valida('Cobransas_certificados_SI_3');
            Cobransas_certificados_SI_3_1 = Valida('Cobransas_certificados_SI_3_1');
            Cobransas_certificados_SI_3_2 = Valida('Cobransas_certificados_SI_3_2');
            Cobransas_certificados_NO_3 = Valida('Cobransas_certificados_NO_3');
            Cobransas_certificados_NO_3_1 = Valida('Cobransas_certificados_NO_3_1');
            Cobransas_certificados_NO_3_2 = Valida('Cobransas_certificados_NO_3_2');
            Cobransas_certificados_SI_4 = Valida('Cobransas_certificados_SI_4');
            Cobransas_certificados_NO_4 = Valida('Cobransas_certificados_NO_4');
            Cobransas_certificados_SI_5 = Valida('Cobransas_certificados_SI_5');

            Cobransas_certificados_NO_5 = Valida('Cobransas_certificados_NO_5');
            Cobransas_certificados_SI_6 = Valida('Cobransas_certificados_SI_6');
            Cobransas_certificados_NO_6 = Valida('Cobransas_certificados_NO_6');
            Cobransas_certificados_ACCIONES_1 = Valida('Cobransas_certificados_ACCIONES_1');
            Cobransas_certificados_ACCIONES_2 = Valida('Cobransas_certificados_ACCIONES_2');
            Cobransas_certificados_ACCIONES_3 =Valida('Cobransas_certificados_ACCIONES_3');






            if (
                Peritos_judiciales_SI_1===false
                || Peritos_judiciales_NO_1===false ||
                Peritos_judiciales_Obserbaciones_1 ===false ||
                Peritos_judiciales_SI_2_1===false ||
            Peritos_judiciales_SI_2_2===false ||
            Peritos_judiciales_NO_2_1===false ||
            Peritos_judiciales_NO_2_2===false ||
            Peritos_judiciales_Obserbaciones_2_1===false ||
            Peritos_judiciales_Obserbaciones_2_2===false ||

                Peritos_judiciales_SI_3 ===false ||
                Peritos_judiciales_NO_3===false ||
                Peritos_judiciales_Obserbaciones_3===false ||
                Peritos_judiciales_SI_4 ===false ||
                Peritos_judiciales_NO_4===false ||
                Peritos_judiciales_Obserbaciones_4===false ||


                Peritos_judiciales_SI_5 ===false ||
                Peritos_judiciales_NO_5===false ||
                Peritos_judiciales_Obserbaciones_5===false ||
                Peritos_judiciales_SI_6_1 ===false ||
                Peritos_judiciales_NO_6_1===false ||
                Peritos_judiciales_SI_6_2 ===false ||
                Peritos_judiciales_NO_6_2===false ||
                Peritos_judiciales_Obserbaciones_6_1===false ||
                Peritos_judiciales_Obserbaciones_6_2===false ||

                Peritos_judiciales_SI_7 && Peritos_judiciales_NO_7===false ||
                Peritos_judiciales_Obserbaciones_7===false ||
                Peritos_judiciales_Acciones_1===false ||
                Peritos_judiciales_Acciones_2===false ||

                //fin peritos judiciales

                Cuerpo_delito_efectos_SI_1===false ||
                    Cuerpo_delito_efectos_NO_1===false ||
                    Cuerpo_delito_efectos_Observaciones_1===false ||
                    Cuerpo_delito_efectos_SI_2_1===false ||
                    Cuerpo_delito_efectos_SI_2_2===false ||
                    Cuerpo_delito_efectos_NO_2_1===false ||
                    Cuerpo_delito_efectos_NO_2_2===false ||
                    Cuerpo_delito_efectos_Observaciones_2_1===false ||
                    Cuerpo_delito_efectos_Observaciones_2_2===false ||

                Cuerpo_delito_efectos_SI_3===false ||
                Cuerpo_delito_efectos_NO_3===false ||
                Cuerpo_delito_efectos_Observaciones_3===false ||

                Cuerpo_delito_efectos_SI_4_1===false ||
                Cuerpo_delito_efectos_SI_4_2===false ||
                Cuerpo_delito_efectos_NO_4_1===false ||
                Cuerpo_delito_efectos_NO_4_2===false ||
                Cuerpo_delito_efectos_Observaciones_4_1===false ||
                Cuerpo_delito_efectos_Observaciones_4_2===false ||

                Cuerpo_delito_efectos_SI_5===false ||
                Cuerpo_delito_efectos_NO_5===false ||
                Cuerpo_delito_efectos_Observaciones_5===false ||
                Cuerpo_delito_efectos_SI_6===false ||
                Cuerpo_delito_efectos_NO_6===false ||
                Cuerpo_delito_efectos_Observaciones_6===false ||

                Cuerpo_delito_efectos_ACCIONES_1===false ||
                Cuerpo_delito_efectos_ACCIONES_2===false ||
                Cuerpo_delito_efectos_ACCIONES_3===false ||
                //cuerpo delito fin

                Recaudacion_judicial_SI_1===false ||
            Recaudacion_judicial_SI_1_1===false ||
            Recaudacion_judicial_SI_1_2===false ||
            Recaudacion_judicial_SI_1_3===false ||
            Recaudacion_judicial_SI_1_4===false ||

            Recaudacion_judicial_NO_1===false ||
            Recaudacion_judicial_NO_1_1===false ||
            Recaudacion_judicial_NO_1_2===false ||
            Recaudacion_judicial_NO_1_3===false ||
            Recaudacion_judicial_NO_1_4 ===false ||
            Recaudacion_judicial_S1_2===false ||

            Recaudacion_judicial_S1_2_1===false ||
            Recaudacion_judicial_S1_2_2===false ||
            Recaudacion_judicial_S1_2_3 ===false ||
            Recaudacion_judicial_NO_2 ===false ||
            Recaudacion_judicial_NO_2_1===false ||
            Recaudacion_judicial_NO_2_2 ===false ||
            Recaudacion_judicial_NO_2_3===false ||
            Recaudacion_judicial_S1_3 ===false ||

            Recaudacion_judicial_S1_3_1===false ||
            Recaudacion_judicial_S1_3_2 ===false ||
            Recaudacion_judicial_NO_3 ===false ||
            Recaudacion_judicial_NO_3_1 ===false ||
            Recaudacion_judicial_NO_3_2===false ||

            Recaudacion_judicial_S1_4 ===false ||
            Recaudacion_judicial_S1_4_1 ===false ||
            Recaudacion_judicial_NO_4===false ||
            Recaudacion_judicial_NO_4_1 ===false ||
            Recaudacion_judicial_SI_5===false ||
            Recaudacion_judicial_NO_5 ===false ||
                // fin recaudacion

                Cobransas_certificados_SI_1 ===false ||
            Cobransas_certificados_SI_1_1 ===false ||
            Cobransas_certificados_NO_1 ===false ||
            Cobransas_certificados_NO_1_1 ===false ||
            Cobransas_certificados_SI_2 ===false ||
            Cobransas_certificados_SI_2_1===false ||

            Cobransas_certificados_SI_2_2 ===false ||
            Cobransas_certificados_SI_2_3 ===false ||
            Cobransas_certificados_SI_2_4 ===false ||
            Cobransas_certificados_SI_2_5===false ||
            Cobransas_certificados_N0_2 ===false ||
            Cobransas_certificados_N0_2_1===false ||
            Cobransas_certificados_N0_2_2 ===false ||
            Cobransas_certificados_N0_2_3===false ||

            Cobransas_certificados_N0_2_4 ===false ||
            Cobransas_certificados_N0_2_5===false ||
            Cobransas_certificados_SI_3 ===false ||
            Cobransas_certificados_SI_3_1 ===false ||
            Cobransas_certificados_SI_3_2 ===false ||
            Cobransas_certificados_NO_3 ===false ||
            Cobransas_certificados_NO_3_1 ===false ||
            Cobransas_certificados_NO_3_2 ===false ||
            Cobransas_certificados_SI_4===false ||
            Cobransas_certificados_NO_4 ===false ||
            Cobransas_certificados_SI_5 ===false ||

            Cobransas_certificados_NO_5  ===false ||
            Cobransas_certificados_SI_6  ===false ||
            Cobransas_certificados_NO_6  ===false ||
            Cobransas_certificados_ACCIONES_1 ===false ||
            Cobransas_certificados_ACCIONES_2  ===false ||
            Cobransas_certificados_ACCIONES_3  ===false














        ) {
                $("#exito").hide();
                $("#error").show();
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Porfavor Rellene la Encuesta!',
                    timer: 2000
                });
            }

        }else{
            $("#error").hide();
            $("#exito").show();
            alert('ya salio czm');

            var frm=$("#regisEncuestas,#form_personal_Observaciones,#regisPersona");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url:'{{url('registrar')}}',
                type:'post',
                dataType:'json',
                data:frm.serialize(),
                success:function (response) {



                    if(response.success==true){
                        frm.trigger('reset');
                        iziToast.success({
                            title: 'OK',
                            message: 'Successfully Registrado Correctamente!',
                        });
                        document.location.reload();



                    }

                }
            })

        }








    }
    $('#magis').on('change',function (e) {
        var catid=e.target.value;

      $.ajax({
           url: '{{url('BuscarOrgano')}}/'+catid,
          type:'get',
          dataType: 'json',
          success:function (response) {
             $.each(response.magistrados,function (index,val) {
                 $('#organo_judicial').empty();
                 $.each(response.subadmin,function (index,vals) {
                     if(vals.id_subAministracion===val.idsubAdmins){

                        $('#organo_judicial').append('<option value="'+vals.id_subAministracion+'">'+vals.organo_judicial+'</option>')

                     }
                     $('#organo_judicial').selectpicker('refresh');
                 });
             });




          }

      });
    });
    $('.selectpicker').selectpicker();
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



    });


</script>
    @endsection

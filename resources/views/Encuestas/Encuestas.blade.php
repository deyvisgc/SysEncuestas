@extends('Principal.principal')
@section('contenido')
    <style>

    </style>
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
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form">
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
                                                         <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">Órgano Jurisdiccional <label>:</label></label>
                                                         <div class="col-sm-9">
                                                             <input type="text" name="Org_Judi"  class="form-control"  id="Org_Judi" placeholder="Escribia aqui.." >
                                                         </div>
                                                     </div><br><br>
                                                     <div class="form-group">
                                                         <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Dirección  <label>:</label></label>
                                                         <div class="col-sm-9"> <input type="text" name="direccion"  placeholder="Escribia aqui.." class="form-control" id="password" ></div>
                                                     </div><br><br>
                                                     <div class="form-group">
                                                         <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">Magistrado <label>:</label></label>
                                                         <div class="col-sm-9">
                                                             <input type="text" name="Magistrado"  class="form-control"  id="Magistrado" placeholder="Escribia aqui.." >
                                                         </div>
                                                     </div><br><br>
                                                     <div class="form-group">
                                                         <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Fecha de programación  <label>:</label></label>
                                                         <div class="col-sm-9"> <input type="date" name="fecha_progra"  placeholder="Escribia aqui.." class="form-control" id="fecha_progra" ></div>
                                                     </div><br><br>
                                                     <div class="form-group">
                                                         <label for="inputPassword3" id="contra" class="col-sm-3 control-label"style="color: black">Fecha de Ejecución <label>:</label></label>
                                                         <div class="col-sm-9"> <input type="date" name="fecha_ejecu"  placeholder="Escribia aqui.." class="form-control" id="fecha_ejecu" ></div>
                                                     </div>



                                                 </form>

                                             </div>

                                         </div>
                                     </div>


                                 <ul class="list-inline pull-right">
                                     <li><button type="button" class="btn btn-primary next-step">Next</button></li>
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
                                            <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">PERSONAL TOTAL:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="Magistrado" style="margin-right: 10px;"  class="form-control"  id="Magistrado" placeholder="Escribia aqui.." >
                                                </div>
                                            </div>
                                            </form>
                                            <br>

                                            <h5 style="margin-left: 10px;">Detallar régimen que lo regula su cantidad y si cuentan con Fotocheck</h5>

                                            <label style="margin-left: 15px;">Trabajadores</label> :
                                            <label style="color: black" class="radio-inline"> <input type="radio" name="optradio">DL 728 fijo</label> <br>
                                            <label style="margin-left: 15px;">Magistrados</label>   :
                                            <label style="color: black" class="radio-inline"> <input type="radio" name="optradio">DL 276</label><br>
                                            <label style="margin-left: 15px;">Trabajadores</label> :
                                            <label style="color: black" class="radio-inline"> <input type="radio" name="optradio">DL 1057</label><br>
                                            <label style="margin-left: 15px;" >Cuentan con Fotocheck:</label> :
                                            <input type="radio" name="optradio"><br>
                                            <h4 style="margin-left: 15px;" >OBSERVACION</h4>
                                            <h6 style="margin-left: 20px;">ACCIONES QUE LA ADMINISTRACIÓN DE LA CORTE ADOPTA PARA SUBSANAR LA(S) DEFICIENCIA (S) ENCONTRADA (S): INDICAR PLAZO</h6><br>
                                            <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">1:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="Magistrado" style="margin-right: 10px;"  class="form-control"  id="Magistrado" placeholder="Escribia aqui.." >
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label" style="color: black">2:</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="Magistrado" style="margin-right: 10px;"  class="form-control"  id="Magistrado" placeholder="Escribia aqui.." >
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

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
                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Mesa de Partes o Centro de
Distribución General</textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Mesa_Partes_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Mesa_Partes_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Archivo Jurisdiccional" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="archivo_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="archivo_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Notificaciones Judiciales"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Notificaciones_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Notificaciones_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Publicación de Edictos" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Publicaciones_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Publicaciones_Archivos"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Convenio – RENIEC" style="color: black;font-weight: bold;"  /></td>
                                                            <td><input type="text" class="form-control" id="Convenio_reniec_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Convenio_reniec_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Requisitorias"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Requisitorias_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control"  id="Requisitorias_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Otros." style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Requisitorias_Otros_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Requisitorias_Otros_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
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
                                                            <td><textarea class="form-control"  rows="2" id="Mensajería_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Mensajería_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Fotocopiado" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Fotocopiado_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Fotocopiado_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Limpieza"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Limpieza_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Limpieza_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Traducciones" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Traducciones_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Traducciones_Archivos"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Publicaciones (Edictos)" style="color: black;font-weight: bold;"  /></td>
                                                            <td><input type="text" class="form-control" id="Publicaciones_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Publicaciones_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Arrendamiento de Locales"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Arrendamiento_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control"  id="Arrendamiento_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Vehículos." style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Requisitorias_Otros_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Requisitorias_Otros_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Otros." style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Mantenimiento_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Mantenimiento_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_logisticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_logisticos_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
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
                                                            <td><textarea class="form-control"  rows="2" id="Energía_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Energía_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Agua" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Agua_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Agua_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Telefonía / Internet"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Telefonía_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Telefonía_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Otros_servicios_basicos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Otros_servicios_basicos_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_servicios_basicos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_servicios_basicos_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
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
                                                            <td><textarea class="form-control"  rows="2" id="Armarios_mobiliario_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Armarios_mobiliario_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Estantería Metálica para
archivos (Ángulos
ranurados)</textarea></td>                                    <td><textarea class="form-control"  rows="3" id="Estantería_mobiliario_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>

                                                            <td><textarea class="form-control"  rows="3" id="Estantería_mobiliario_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Escritorios / Mesas"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Escritorios_mobiliario_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Escritorios_mobiliario_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Sillas / Sillones" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Sillas_mobiliario_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Sillas_mobiliario_Archivos"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Módulos para
 computadora" style="color: black;font-weight: bold;"  /></td>
                                                            <td><input type="text" class="form-control" id="Módulos_computadoras_mobiliarios_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Módulos_computadoras_mobiliarios_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Otros"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="otros_mobiliario_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control"  id="otros_mobiliario_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_mobiliarios_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_logisticos_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
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
                                                            <td><textarea class="form-control"  rows="2" id="Papel_suministro_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Papel_suministro_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Bolígrafos / Grapas 26/6</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="Bolígrafos_suministro_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Bolígrafos_suministro_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Carátulas para expedientes"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Carátulas_suministro_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Carátulas_suministro_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="El Peruano (suministro)" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Peruano_suministro_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Peruano_suministro_Archivos"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >Otros (Archivador Palanca,
Símbolos y distintivo, Boletín de
Condenas Nº 1, etc.)</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="Otros_suministro_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="Otros_suministro_Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_suministro_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_suministro_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
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
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Next</button></li>
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
                                                            <td><textarea class="form-control"  rows="2" id="Computadoras_informaticos_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Computadoras_informaticos__Acciones"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Impresoras</textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Impresoras_informaticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Impresoras_informaticos_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text" class="form-control" readonly value="Fax"style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control" id="Fax_Informaticos_Deficiencias"  /></td>
                                                            <td><input type="text" class="form-control" id="Fax_informaticos_suministro_Acciones"  /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Equipos de
Cómputo" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Mantenimiento_equipos_Informaticos_Deficiencias" name="Mantenimiento_equipos_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>
                                                        </tr>

                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="UPS" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="UPS_Informaticos_Deficiencias" name="UPS_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="UPS_Informaticos_Acciones" name="UPS_Informaticos_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Supresor de Picos" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="supresor_picos_Informaticos_Deficiencias" name="supresor_picos_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="supresor_picos_Informaticos_Acciones" name="supresor_picos_Informaticos_Acciones" /></td>
                                                        </tr>

                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Correo Electronico" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Correo_Informaticos_Deficiencias" name="Correo_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Correo_Informaticos_Acciones" name="Correo_Informaticos_Deficiencias" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Sistemas Informáticos – Software" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="sistemas_Informaticos_Deficiencias" name="sistemas_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="sistemas_Informaticos_Acciones" name="sistemas_Informaticos_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input  type="text"  class="form-control" readonly value="Redes Informáticos" style="color: black;font-weight: bold;" /></td>
                                                            <td><input type="text" class="form-control"  id="Redes_Informáticos_Informaticos_Deficiencias" name="Redes_Informáticos_Informaticos_Deficiencias" /></td>
                                                            <td><input type="text" class="form-control" id="Redes_Informáticos_Informaticos_Acciones" name="Redes_Informáticos_Informaticos_Acciones" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Otros</textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Otros_Informaticos_Deficiencias"  name="Otros_Informaticos_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="2" id="Otros_Informaticos_Acciones"  name="Otros_Informaticos_Acciones" style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Informaticos_Deficiencias" name="subrasarse_Informaticos_Deficiencias" style="color: black;font-weight: bold;" ></textarea></td>
                                                            <td><textarea class="form-control"  rows="3" id="subrasarse_Informaticos_Acciones" name="subrasarse_Informaticos_Acciones" style="color: black;font-weight: bold;" ></textarea></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <h6 style="margin-left: 20px;">CALIFICACIÓN: BUENO (B), REGULAR (R), MALO (M).</h6>

                                                </div>
                                                <br>

                                            </div>
                                        </div>
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
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_detectorM_Deficiencias" name="Aspectos_seguridad_detectorM_Deficiencias"   style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_detectorM_Acciones" name="Aspectos_seguridad_detectorM"  style="color: black;font-weight: bold;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Extintores</textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text" class="form-control" readonly value="Mangueras contra incendio"style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_seguridad_Mangueras_Deficiencias" name="Aspectos_seguridad_Mangueras_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_seguridad_Mangueras_Acciones" name="Aspectos_seguridad_Mangueras_Acciones"  /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_seguridad_Otros_Deficiencias" name="Aspectos_seguridad_Otros_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_seguridad_Otros_Acciones" name="Aspectos_seguridad_Otros_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                        <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_seguridad_Deficiencias" name="subrasarse_Aspectos_seguridad_Deficiencias" style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_seguridad_Acciones" name="subrasarse_Aspectos_seguridad_Acciones" style="color: black;font-weight: bold;" ></textarea></td>
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
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_generales_Estructuras_Deficiencias" name="Aspectos_generales_Estructuras_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_generales_Estructuras_Acciones"  name="Aspectos_generales_Estructuras_Acciones"  style="color: black;font-weight: bold;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea class="form-control"  rows="2" id="comment" readonly style="color: black;font-weight: bold;" >Puertas</textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_generales_Puertas_Deficiencias" name="Aspectos_generales_Puertas_Deficiencias"  style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="2" id="Aspectos_generales_Puertas_Acciones" name="Aspectos_generales_Puertas_Acciones" style="color: black;font-weight: bold;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text" class="form-control" readonly value="Ventanas"style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Ventanas_Deficiencias" name="Aspectos_generales_Ventanas_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Ventanas_Acciones" name="Aspectos_generales_Ventanas_Acciones"  /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Pisos" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Pisos_Deficiencias" name="Aspectos_generales_Pisos_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Pisos_Acciones" name="Aspectos_generales_Pisos_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Pintura (externa – interna)" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Pintura_Deficiencias" name="Aspectos_generales_Pintura_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Pintura_Acciones" name="Aspectos_generales_Pintura_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Instalaciones Sanitarias" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Instalaciones_Sanitarias_Deficiencias" name="Aspectos_generales_Instalaciones_Sanitarias_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Instalaciones_Sanitarias_Acciones" name="Aspectos_generales_Instalaciones_Sanitarias_Acciones" /></td>
                                                    </tr>

                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Instalaciones Eléctricas" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Instalaciones_Eléctricas_Deficiencias" name="Aspectos_generales_Instalaciones_Eléctricas_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Instalaciones_Eléctricas_Acciones" name="Aspectos_generales_Instalaciones_Eléctricas_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Brinda Seguridad" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_brinda_Seguridad_Deficiencias" name="Aspectos_generales_brinda_Seguridad_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_brinda_Seguridad_Acciones" name="Aspectos_generales_brinda_Seguridad_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Mantenimiento de Local" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Mantenimiento_local_Deficiencias" name="Aspectos_generales_Mantenimiento_local_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Mantenimiento_local_Acciones" name="Aspectos_generales_Mantenimiento_local_Acciones" /></td>
                                                    </tr>

                                                    <tr>
                                                        <td><input  type="text"  class="form-control" readonly value="Otros" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control"  id="Aspectos_generales_Otros_Deficiencias" name="Aspectos_generales_Otros_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_Otros_Acciones" name="Aspectos_generales_Otros_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea class="form-control"  rows="3" id="comment" readonly style="color: black;font-weight: bold;" >En caso de no subsanarse la
deficiencia explicar la acción a
realizar y plazo para dar la solución.</textarea></td>
                                                        <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_generales_Deficiencias" name="ssubrasarse_Aspectos_generales_Deficiencias" style="color: black;font-weight: bold;" ></textarea></td>
                                                        <td><textarea class="form-control"  rows="3" id="subrasarse_Aspectos_generales_Acciones" name="subrasarse_Aspectos_generales_Acciones" style="color: black;font-weight: bold;" ></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3"><label>Cuando el local visitado es <label style="color: black;">ALQUILADO</label> , y en la visita se han encontrado deficiencias en los aspectos del inmueble (cuadro
                                                                anterior), señalar las deficiencias encontradas para las reparaciones que se requieran, precisando que <label style="color: black">no se efectuaran
                                                                    mejoras en locales alquilados.</label></label></th>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text" id="Aspectos_generales_ALQUILADO"  name="Aspectos_generales_ALQUILADO" class="form-control"  placeholder="-------------------------------------------------------------------" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_ALQUILADO1"  name="Aspectos_generales_ALQUILADO1" placeholder="----------------------------------------------------------------------" id="Mantenimiento_equipos_Informaticos_Deficiencias" name="Mantenimiento_equipos_Informaticos_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_ALQUILADO2"  name="Aspectos_generales_ALQUILADO2" placeholder="----------------------------------------------------------------------" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3">Si el local visitado tiene la condición de <label style="color: black;">CEDIDO EN USO,</label> ,y en la visita se han advertido deficiencias en los aspectos del
                                                                inmueble (cuadro anterior), podrá coordinar con la Oficina de Infraestructura a fin de que está evalué las acciones a tomar,
                                                                siempre y cuando el plazo de cesión en uso es superior a los 10 años.></th>
                                                    </tr>
                                                    <tr>
                                                        <td><input  type="text"  class="form-control" id="Aspectos_generales_CEDIDO" name="Aspectos_generales_CEDIDO" placeholder="-------------------------------------------------------------------" style="color: black;font-weight: bold;" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_CEDIDO1" name="Aspectos_generales_CEDIDO1" placeholder="----------------------------------------------------------------------" id="Mantenimiento_equipos_Informaticos_Deficiencias" name="Mantenimiento_equipos_Informaticos_Deficiencias" /></td>
                                                        <td><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="----------------------------------------------------------------------" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>
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
                                                                <td><textarea class="form-control"   rows="2" id="Aspectos_seguridad_detectorM_Acciones" name="Aspectos_seguridad_detectorM"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                <td><textarea class="form-control"   rows="2" id="Aspectos_seguridad_detectorM_Acciones" name="Aspectos_seguridad_detectorM"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>
                                                                <td><textarea class="form-control"   rows="2" id="Aspectos_seguridad_detectorM_Acciones" name="Aspectos_seguridad_detectorM"  style="color: black;font-weight: bold;margin-top: 10px;" ></textarea></td>

                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >¿Remite a su Registro Distrital de Internos Procesados y Sentenciados (Redipros), la Ficha Única del Renipros dentro de las 24 horas de emitido el mandato?</textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px; " ></textarea></td>


                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;" >Al remitir la Ficha Única del Renipros ¿Adjunta la Resolución Judicial que da origen al llenado de la Ficha en copia certificada por el Secretario de Juzgado o Sala?</textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>


                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td><textarea class="form-control"  rows="4" readonly id="Aspectos_seguridad_Extintores_Deficiencias" name="Aspectos_seguridad_Extintores_Deficiencias"  style="color: black;font-weight: bold;"  >Se cumple con informar al Redipros de los mandatos del Órgano Jurisdiccional sobre el internamiento o salida o la variación de la situación jurídica (de procesado a sentenciado)</textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>
                                                                <td><textarea class="form-control"  rows="2" id="Aspectos_seguridad_Extintores_Acciones" name="Aspectos_seguridad_Extintores_Acciones"  style="color: black;font-weight: bold;margin-top: 20px;" ></textarea></td>


                                                            </tr>
                                                            <tr>
                                                                <th colspan="5">De ser negativa la respuesta, explique porque?: <input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui....."  /></th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="5"><h5>ACCIONES QUE ADOPTO LA ADMINISTRACIÓN DE LA CORTE:</h5></th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td colspan="5"><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td colspan="5"><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>

                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td colspan="5"><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>

                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td colspan="5"><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>

                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td colspan="5"><input type="text" class="form-control" id="Aspectos_generales_CEDIDO2" name="Aspectos_generales_CEDIDO2" placeholder="Escribir aqui......" id="Mantenimiento_equipos_Informaticos_Acciones" name="Mantenimiento_equipos_Informaticos_Acciones" /></td>

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

                                                </div>

                                            </div>


                                        </div>






                                    </div>


                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-danger prev-step">
                                            Anterior</button></li>
                                    <li><button type="button" class="btn btn-default next-step">Omitir</button></li>
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-danger prev-step">
                                            Anterior</button></li>
                                    <li><button type="button" class="btn btn-success btn-info-full next-step">Registrar Encuesta</button></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    @endsection
@section('script')
<script>

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
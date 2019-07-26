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
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
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
                                                        <th style="padding-bottom: 50px;text-align: center;padding-top: 10px;" width="30%;">Deficiencias Identificadas Indicar el
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
                                <h3>Step 3</h3>
                                <p>This is step 3</p>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>Complete</h3>
                                <p>You have successfully completed all steps.</p>
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
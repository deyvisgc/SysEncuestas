var v=true;
$("span.help-block").hide();
$(document).ready(function () {
    $(".next-step").click(function (e) {
        var magis=$("#magis").val();
        var organo=$('#organo_judicial').val();
        var direcc=$('#direccion').val();
        var fecha_pr=$('#fecha_progra').val();
        var fecha_ejecu=$('#fecha_ejecu').val();
        if (magis==='' || organo==='' || direcc==='' || fecha_pr===''||fecha_ejecu===''){
            var magistrado= 0,direccion=0,fecha_progrma=0,fecha_ejecusion=0,organojudicial= 0;
            magistrado=validacion('magis');
            organojudicial=validacion('organo_judicial');
            direccion=validacion('direccion');
            fecha_progrma=validacion('fecha_progra');
            fecha_ejecusion=validacion('fecha_ejecu');

            if (magistrado===false || magistrado===false || organojudicial===false || direccion===false || fecha_ejecusion===false ) {
                $("#exito").hide();
                $("#error").show();
            }else{
                $("#error").hide();
                $("#exito").show();
            }
        }else {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        }




    });
    $('#next1').click(function (e) {
        e.preventDefault();
        var personal_total = $('#personal_total').val();
        var observacion_1_Personal=$('#observacion_1_Personal').val();
        var observacion_2_Personal=$('#observacion_2_Personal').val();
        var Mesa_Partes_areas_apoyo_Deficiencias = $('#Mesa_Partes_areas_apoyo_Deficiencias').val();
        var Mesa_Partes_areas_apoyo_Acciones=$('#Mesa_Partes_areas_apoyo_Acciones').val();
        var archivo_areas_apoyo_Deficiencias=$('#archivo_areas_apoyo_Deficiencias').val();
        var archivo_areas_apoyo_Acciones=$('#archivo_areas_apoyo_Acciones').val();
        var Notificaciones_areas_apoyo_Deficiencias=$('#Notificaciones_areas_apoyo_Deficiencias').val();
        var Notificaciones_areas_apoyo_Acciones=$('#Notificaciones_areas_apoyo_Acciones').val();

        var Publicaciones_areas_apoyo_Deficiencias = $('#Publicaciones_areas_apoyo_Deficiencias').val();
        var Publicaciones_areas_apoyo_Archivos=$('#Publicaciones_areas_apoyo_Archivos').val();
        var Convenio_reniec_areas_apoyo_Deficiencias=$('#Convenio_reniec_areas_apoyo_Deficiencias').val();
        var Convenio_reniec_areas_apoyo_Acciones = $('#Convenio_reniec_areas_apoyo_Acciones').val();
        var Requisitorias_areas_apoyo_Deficiencias=$('#Requisitorias_areas_apoyo_Deficiencias').val();
        var Requisitorias_areas_apoyo_Acciones=$('#Requisitorias_areas_apoyo_Acciones').val();

        var Otros_areas_apoyo_Deficiencias=$('#Otros_areas_apoyo_Deficiencias').val();
        var Otros_areas_apoyo_Acciones=$('#Otros_areas_apoyo_Acciones').val();
        var subrasarse_areas_apoyo_Deficiencias = $('#Publicaciones_areas_apoyo_Deficiencias').val();
        var subrasarse_areas_apoyo_Acciones=$('#Publicaciones_areas_apoyo_Archivos').val();
        //fin validacion de areas de apoyos
        //inicio de aspectos logisticos
        var Mensajería_aspectos_logisticos_Deficiencias=$('#Mensajería_aspectos_logisticos_Deficiencias').val();
        var Mensajería_aspectos_logisticos_Acciones=$('#Mensajería_aspectos_logisticos_Acciones').val();
        var Fotocopiado_aspectos_logisticos_Deficiencias=$('#Fotocopiado_aspectos_logisticos_Deficiencias').val();
        var Fotocopiado_aspectos_logisticos_Acciones=$('#Fotocopiado_aspectos_logisticos_Acciones').val();
        var Limpieza_aspectos_logisticos_Deficiencias=$('#Limpieza_aspectos_logisticos_Deficiencias').val();
        var Limpieza_aspectos_logisticos_Acciones=$('#Limpieza_aspectos_logisticos_Acciones').val();
        var Traducciones_aspectos_logisticos_Deficiencias=$('#Traducciones_aspectos_logisticos_Deficiencias').val();
        var Traducciones_aspectos_logisticos_Archivos=$('#Traducciones_aspectos_logisticos_Archivos').val();
        var Publicaciones_aspectos_logisticos_Deficiencias=$('#Publicaciones_aspectos_logisticos_Deficiencias').val();
        var Publicaciones_aspectos_logisticos_Acciones=$('#Publicaciones_aspectos_logisticos_Acciones').val();
        var Arrendamiento_aspectos_logisticos_Deficiencias=$('#Arrendamiento_aspectos_logisticos_Deficiencias').val();
        var Arrendamiento_aspectos_logisticos_Acciones=$('#Arrendamiento_aspectos_logisticos_Acciones').val();

        var Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias=$('#Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias').val();
        var Mantenimiento_vehiculos_aspectos_logisticos_Acciones=$('#Mantenimiento_vehiculos_aspectos_logisticos_Acciones').val();
        var Otros_aspectos_logisticos_Deficiencias=$('#Otros_aspectos_logisticos_Deficiencias').val();
        var Otros_aspectos_logisticos_Acciones=$('#Otros_aspectos_logisticos_Deficiencias').val();
        var subrasarse_Aspectos_logisticos_Deficiencias=$('#subrasarse_Aspectos_logisticos_Deficiencias').val();
        var subrasarse_Aspectos_logisticos_Acciones=$('#subrasarse_Aspectos_logisticos_Acciones').val();

        //fin de validaion de aspectos logisitos
        var Energía_servicio_bascios_Deficiencias=$('#Energía_servicio_bascios_Deficiencias').val();
        var Energía_servicio_bascios_Acciones=$('#Energía_servicio_bascios_Acciones').val();

        var Agua_servicio_bascios_Deficiencias=$('#Agua_servicio_bascios_Deficiencias').val();
        var Agua_servicio_bascios_Acciones=$('#Agua_servicio_bascios_Acciones').val();

        var Telefonía_servicio_bascios_Deficiencias=$('#Telefonía_servicio_bascios_Deficiencias').val();
        var Telefonía_servicio_bascios_Acciones=$('#Telefonía_servicio_bascios_Acciones').val();

        var Otros_servicios_basicos_Deficiencias=$('#Otros_servicios_basicos_Deficiencias').val();
        var Otros_servicios_basicos_Acciones=$('#Otros_servicios_basicos_Acciones').val();

        var subrasarse_servicios_basicos_Deficiencias=$('#subrasarse_servicios_basicos_Deficiencias').val();
        var subrasarse_servicios_basicos_Acciones=$('#subrasarse_servicios_basicos_Acciones').val();
//fin servicios basicos
        var Armarios_mobiliario_Deficiencias=$('#Armarios_mobiliario_Deficiencias').val();
        var Armarios_mobiliario_Acciones=$('#Armarios_mobiliario_Acciones').val();
        var Estantería_mobiliario_Acciones=$('#Estantería_mobiliario_Acciones').val();
        var Escritorios_mobiliario_Deficiencias=$('#Escritorios_mobiliario_Deficiencias').val();
        var Escritorios_mobiliario_Acciones=$('#Escritorios_mobiliario_Acciones').val();
        var Sillas_mobiliario_Deficiencias=$('#Sillas_mobiliario_Deficiencias').val();
        var Sillas_mobiliario_Archivos=$('#Sillas_mobiliario_Archivos').val();
        var Módulos_computadoras_mobiliarios_Deficiencias=$('#Módulos_computadoras_mobiliarios_Deficiencias').val();
        var Módulos_computadoras_mobiliarios_Acciones=$('#Módulos_computadoras_mobiliarios_Deficiencias').val();
        var otros_mobiliario_Deficiencias=$('#otros_mobiliario_Deficiencias').val();
        var otros_mobiliario_Acciones=$('#otros_mobiliario_Deficiencias').val();

        var subrasarse_mobiliarios_Deficiencias=$('#subrasarse_mobiliarios_Deficiencias').val();
        var subrasarse_mobiliarios_Acciones=$('#subrasarse_mobiliarios_Acciones').val();
        //fin mobiliarios

        var Papel_suministro_Deficiencias=$('#Papel_suministro_Deficiencias').val();
        var Papel_suministro_Acciones=$('#Papel_suministro_Acciones').val();
        var Bolígrafos_suministro_Deficiencias=$('#Bolígrafos_suministro_Deficiencias').val();
        var Bolígrafos_suministro_Acciones=$('#Bolígrafos_suministro_Acciones').val();
        var Cinta_suministro_Deficiencias=$('#Cinta_suministro_Deficiencias').val();
        var Cinta_suministro_Acciones=$('#Cinta_suministro_Acciones').val();
        var Carátulas_suministro_Deficiencias=$('#Carátulas_suministro_Deficiencias').val();
        var Carátulas_suministro_Acciones=$('#Carátulas_suministro_Acciones').val();
        var Peruano_suministro_Deficiencias=$('#Peruano_suministro_Deficiencias').val();
        var Peruano_suministro_Archivos=$('#Peruano_suministro_Archivos').val();
        var Otros_suministro_Deficiencias=$('#Otros_suministro_Deficiencias').val();
        var Otros_suministro_Acciones=$('#Otros_suministro_Acciones').val();
        var subrasarse_suministro_Deficiencias=$('#subrasarse_suministro_Deficiencias').val();
        var subrasarse_suministro_Acciones=$('#subrasarse_suministro_Acciones').val();










        if (personal_total === ''|| observacion_1_Personal===''||observacion_2_Personal==='' || Mesa_Partes_areas_apoyo_Deficiencias === '' || Mesa_Partes_areas_apoyo_Acciones===''||archivo_areas_apoyo_Deficiencias==='' || archivo_areas_apoyo_Acciones === ''|| Notificaciones_areas_apoyo_Deficiencias==='' ||Notificaciones_areas_apoyo_Acciones==='' || Publicaciones_areas_apoyo_Deficiencias === ''|| Publicaciones_areas_apoyo_Archivos==='' ||Convenio_reniec_areas_apoyo_Deficiencias==='' ||Convenio_reniec_areas_apoyo_Acciones==='' ||Requisitorias_areas_apoyo_Deficiencias===''  ||Requisitorias_areas_apoyo_Acciones==='' || Otros_areas_apoyo_Deficiencias==='' ||Otros_areas_apoyo_Acciones===''|| subrasarse_areas_apoyo_Deficiencias ===''|| subrasarse_areas_apoyo_Acciones==='' || Mensajería_aspectos_logisticos_Deficiencias==='' || Mensajería_aspectos_logisticos_Acciones==='' ||Fotocopiado_aspectos_logisticos_Deficiencias==='' || Fotocopiado_aspectos_logisticos_Acciones==='' ||Limpieza_aspectos_logisticos_Deficiencias==='' || Limpieza_aspectos_logisticos_Acciones ==='' || Traducciones_aspectos_logisticos_Deficiencias===''|| Traducciones_aspectos_logisticos_Archivos==='' ||Publicaciones_aspectos_logisticos_Deficiencias==='' ||Publicaciones_aspectos_logisticos_Acciones==='' || Arrendamiento_aspectos_logisticos_Deficiencias==='' || Arrendamiento_aspectos_logisticos_Acciones==='' || Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias===0 || Mantenimiento_vehiculos_aspectos_logisticos_Acciones===0 || Otros_aspectos_logisticos_Deficiencias===''  || Otros_aspectos_logisticos_Acciones==='' || subrasarse_Aspectos_logisticos_Deficiencias==='' || subrasarse_Aspectos_logisticos_Acciones==='' ||Energía_servicio_bascios_Deficiencias==='' || Energía_servicio_bascios_Acciones==='' ||Agua_servicio_bascios_Deficiencias==='' ||Agua_servicio_bascios_Acciones===''  || Telefonía_servicio_bascios_Deficiencias==='' || Telefonía_servicio_bascios_Acciones==='' ||Otros_servicios_basicos_Deficiencias || Otros_servicios_basicos_Acciones===''||subrasarse_servicios_basicos_Deficiencias==='' ||subrasarse_servicios_basicos_Acciones===''|| Armarios_mobiliario_Deficiencias==='' ||Armarios_mobiliario_Acciones==='' || Estantería_mobiliario_Acciones==='' ||Escritorios_mobiliario_Deficiencias===''|| Escritorios_mobiliario_Acciones==='' ||Sillas_mobiliario_Deficiencias==='' || Sillas_mobiliario_Archivos===''|| Módulos_computadoras_mobiliarios_Deficiencias===''|| Módulos_computadoras_mobiliarios_Acciones==='' ||otros_mobiliario_Deficiencias==='' || otros_mobiliario_Acciones==='' || subrasarse_mobiliarios_Deficiencias==='' ||subrasarse_mobiliarios_Acciones===''||
            Papel_suministro_Deficiencias==='' ||Papel_suministro_Acciones==='' ||Bolígrafos_suministro_Deficiencias==='' ||Bolígrafos_suministro_Acciones  ||
            Cinta_suministro_Deficiencias==='' ||Cinta_suministro_Acciones==='' ||  Peruano_suministro_Deficiencias==='' ||Peruano_suministro_Archivos===''
            ||Otros_suministro_Deficiencias==='' ||Otros_suministro_Acciones==='' ||subrasarse_suministro_Deficiencias==='' || subrasarse_suministro_Acciones===''||
            Carátulas_suministro_Deficiencias==='' ||Carátulas_suministro_Acciones===''



        )





        {
            var personal_total = 0,observacion1,Mesa_Partes_areas_apoyo_Deficiencias=0,Mesa_Partes_areas_apoyo_Acciones=0,archivo_areas_apoyo_Deficiencias=0, archivo_areas_apoyo_Acciones=0,Notificaciones_areas_apoyo_Deficiencias=0,Notificaciones_areas_apoyo_Acciones=0, Publicaciones_areas_apoyo_Deficiencias=0,Publicaciones_areas_apoyo_Archivos=0,Convenio_reniec_areas_apoyo_Deficiencias=0, Convenio_reniec_areas_apoyo_Acciones=0,Requisitorias_areas_apoyo_Deficiencias=0,Requisitorias_areas_apoyo_Acciones=0,Otros_areas_apoyo_Deficiencias=0, Otros_areas_apoyo_Acciones=0,subrasarse_areas_apoyo_Deficiencias=0, subrasarse_areas_apoyo_Acciones=0, Mensajería_aspectos_logisticos_Deficiencias=0,Mensajería_aspectos_logisticos_Acciones=0,Fotocopiado_aspectos_logisticos_Deficiencias=0,Fotocopiado_aspectos_logisticos_Acciones=0,Limpieza_aspectos_logisticos_Deficiencias=0,Limpieza_aspectos_logisticos_Acciones=0,Traducciones_aspectos_logisticos_Deficiencias=0,Traducciones_aspectos_logisticos_Archivos=0,Publicaciones_aspectos_logisticos_Deficiencias=0, Publicaciones_aspectos_logisticos_Acciones=0,Arrendamiento_aspectos_logisticos_Deficiencias=0,Arrendamiento_aspectos_logisticos_Acciones=0,Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias=0,Mantenimiento_vehiculos_aspectos_logisticos_Acciones=0,Otros_aspectos_logisticos_Deficiencias=0,Otros_aspectos_logisticos_Acciones=0,subrasarse_Aspectos_logisticos_Deficiencias=0,subrasarse_Aspectos_logisticos_Acciones=0,Energía_servicio_bascios_Deficiencias=0,Energía_servicio_bascios_Acciones=0,Agua_servicio_bascios_Deficiencias=0,Agua_servicio_bascios_Acciones=0,Telefonía_servicio_bascios_Deficiencias=0,Telefonía_servicio_bascios_Acciones=0,Otros_servicios_basicos_Deficiencias=0,Otros_servicios_basicos_Acciones=0,subrasarse_servicios_basicos_Deficiencias=0,subrasarse_servicios_basicos_Acciones=0,Armarios_mobiliario_Deficiencias=0, Armarios_mobiliario_Acciones=0, Estantería_mobiliario_Acciones=0, Escritorios_mobiliario_Deficiencias=0, Escritorios_mobiliario_Acciones=0, Sillas_mobiliario_Deficiencias=0, Sillas_mobiliario_Archivos=0, Módulos_computadoras_mobiliarios_Deficiencias=0,Módulos_computadoras_mobiliarios_Acciones=0,otros_mobiliario_Deficiencias=0,otros_mobiliario_Acciones=0, subrasarse_mobiliarios_Deficiencias=0, subrasarse_mobiliarios_Acciones=0

            Papel_suministro_Deficiencias=0,
             Papel_suministro_Acciones=0,
             Bolígrafos_suministro_Deficiencias=0,
             Bolígrafos_suministro_Acciones=0,
             Cinta_suministro_Deficiencias=0,
             Cinta_suministro_Acciones=0,
                Peruano_suministro_Deficiencias=0,
             Peruano_suministro_Archivos=0,
             Otros_suministro_Deficiencias=0,
             Otros_suministro_Acciones=0,
             subrasarse_suministro_Deficiencias=0,
             subrasarse_suministro_Acciones=0

            ;

            personal_total = validacion('personal_total');
            observacion1 = validacion('observacion_1_Personal');
            observacion1 = validacion('observacion_2_Personal');

            Mesa_Partes_areas_apoyo_Deficiencias = validacion('Mesa_Partes_areas_apoyo_Deficiencias');
            Mesa_Partes_areas_apoyo_Acciones = validacion('Mesa_Partes_areas_apoyo_Acciones');
            archivo_areas_apoyo_Deficiencias = validacion('archivo_areas_apoyo_Deficiencias');

            archivo_areas_apoyo_Acciones = validacion('archivo_areas_apoyo_Acciones');
            Notificaciones_areas_apoyo_Deficiencias = validacion('Notificaciones_areas_apoyo_Deficiencias');
            Notificaciones_areas_apoyo_Acciones = validacion('Notificaciones_areas_apoyo_Acciones');

            Publicaciones_areas_apoyo_Deficiencias = validacion('Publicaciones_areas_apoyo_Deficiencias');
            Publicaciones_areas_apoyo_Archivos = validacion('Publicaciones_areas_apoyo_Archivos');
            Convenio_reniec_areas_apoyo_Deficiencias = validacion('Convenio_reniec_areas_apoyo_Deficiencias');

            Convenio_reniec_areas_apoyo_Acciones = validacion('Convenio_reniec_areas_apoyo_Acciones');
            Requisitorias_areas_apoyo_Deficiencias = validacion('Requisitorias_areas_apoyo_Deficiencias');
            Requisitorias_areas_apoyo_Acciones = validacion('Requisitorias_areas_apoyo_Acciones');

            Otros_areas_apoyo_Deficiencias = validacion('Otros_areas_apoyo_Deficiencias');
            Otros_areas_apoyo_Acciones = validacion('Otros_areas_apoyo_Acciones');
            subrasarse_areas_apoyo_Deficiencias = validacion('subrasarse_areas_apoyo_Deficiencias');
            subrasarse_areas_apoyo_Acciones = validacion('subrasarse_areas_apoyo_Acciones');
            //fin de validacion de areas de apoyo

            Mensajería_aspectos_logisticos_Deficiencias=validacion('Mensajería_aspectos_logisticos_Deficiencias');
            Mensajería_aspectos_logisticos_Acciones=validacion('Mensajería_aspectos_logisticos_Acciones');
            Fotocopiado_aspectos_logisticos_Deficiencias=validacion('Fotocopiado_aspectos_logisticos_Deficiencias');
            Fotocopiado_aspectos_logisticos_Acciones=validacion("Fotocopiado_aspectos_logisticos_Acciones")
            Limpieza_aspectos_logisticos_Deficiencias=validacion('Limpieza_aspectos_logisticos_Deficiencias');
            Limpieza_aspectos_logisticos_Acciones=validacion('Limpieza_aspectos_logisticos_Acciones');


            Traducciones_aspectos_logisticos_Deficiencias=validacion('Traducciones_aspectos_logisticos_Deficiencias');
            Traducciones_aspectos_logisticos_Archivos=validacion('Traducciones_aspectos_logisticos_Archivos');
            Publicaciones_aspectos_logisticos_Deficiencias=validacion('Publicaciones_aspectos_logisticos_Deficiencias');
            Publicaciones_aspectos_logisticos_Acciones=validacion('Publicaciones_aspectos_logisticos_Acciones');
            Arrendamiento_aspectos_logisticos_Deficiencias=validacion('Arrendamiento_aspectos_logisticos_Deficiencias');
            Arrendamiento_aspectos_logisticos_Acciones=validacion('Arrendamiento_aspectos_logisticos_Acciones');

            Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias=validacion('Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias');
            Mantenimiento_vehiculos_aspectos_logisticos_Acciones=validacion('Mantenimiento_vehiculos_aspectos_logisticos_Acciones');
            Otros_aspectos_logisticos_Deficiencias=validacion('Otros_aspectos_logisticos_Deficiencias');
            Otros_aspectos_logisticos_Acciones=validacion('Otros_aspectos_logisticos_Acciones');
            subrasarse_Aspectos_logisticos_Deficiencias=validacion('subrasarse_Aspectos_logisticos_Deficiencias');
            subrasarse_Aspectos_logisticos_Acciones=validacion('subrasarse_Aspectos_logisticos_Acciones');

        Energía_servicio_bascios_Deficiencias=validacion('Energía_servicio_bascios_Deficiencias');
        Energía_servicio_bascios_Acciones=validacion('Energía_servicio_bascios_Acciones') ;
        Agua_servicio_bascios_Deficiencias=validacion('Agua_servicio_bascios_Deficiencias');
        Agua_servicio_bascios_Acciones=validacion('Agua_servicio_bascios_Acciones');
         Telefonía_servicio_bascios_Deficiencias=validacion('Telefonía_servicio_bascios_Deficiencias');
          Telefonía_servicio_bascios_Acciones=validacion('Telefonía_servicio_bascios_Acciones');
        Otros_servicios_basicos_Deficiencias=validacion('Otros_servicios_basicos_Deficiencias');
         Otros_servicios_basicos_Acciones=validacion('Otros_servicios_basicos_Acciones');
         subrasarse_servicios_basicos_Deficiencias=validacion('subrasarse_servicios_basicos_Deficiencias');
        subrasarse_servicios_basicos_Acciones=validacion('subrasarse_servicios_basicos_Acciones');
//fin aspectos basicos
             Armarios_mobiliario_Deficiencias=validacion('Armarios_mobiliario_Deficiencias');
             Armarios_mobiliario_Acciones=validacion('Armarios_mobiliario_Acciones');
             Estantería_mobiliario_Acciones=validacion('Estantería_mobiliario_Acciones');
            Estantería_mobiliario_Deficiencias=validacion('Estantería_mobiliario_Deficiencias');
             Escritorios_mobiliario_Deficiencias=validacion('Escritorios_mobiliario_Deficiencias');
             Escritorios_mobiliario_Acciones=validacion('Escritorios_mobiliario_Acciones');
             Sillas_mobiliario_Deficiencias=validacion('Sillas_mobiliario_Deficiencias');
             Sillas_mobiliario_Archivos=validacion('Sillas_mobiliario_Archivos');
             Módulos_computadoras_mobiliarios_Deficiencias=validacion('Módulos_computadoras_mobiliarios_Deficiencias');
             Módulos_computadoras_mobiliarios_Acciones=validacion('Módulos_computadoras_mobiliarios_Acciones');
             otros_mobiliario_Deficiencias=validacion('otros_mobiliario_Deficiencias');
             otros_mobiliario_Acciones=validacion('otros_mobiliario_Acciones');
             subrasarse_mobiliarios_Deficiencias=validacion('subrasarse_mobiliarios_Deficiencias');
            subrasarse_mobiliarios_Acciones=validacion('subrasarse_mobiliarios_Acciones');
       //fin mobiliario
            Papel_suministro_Deficiencias=validacion('Papel_suministro_Deficiencias');
                Papel_suministro_Acciones=validacion('Papel_suministro_Acciones');
                Bolígrafos_suministro_Deficiencias=validacion('Bolígrafos_suministro_Deficiencias');
                Bolígrafos_suministro_Acciones=validacion('Bolígrafos_suministro_Acciones');
                Cinta_suministro_Deficiencias=validacion('Cinta_suministro_Deficiencias');
                Cinta_suministro_Acciones=validacion('Cinta_suministro_Acciones');
             Carátulas_suministro_Deficiencias=validacion('Carátulas_suministro_Deficiencias');
             Carátulas_suministro_Acciones=validacion('Carátulas_suministro_Acciones');
                Peruano_suministro_Deficiencias=validacion('Peruano_suministro_Deficiencias');
                Peruano_suministro_Archivos=validacion('Peruano_suministro_Archivos');
                Otros_suministro_Deficiencias=validacion('Otros_suministro_Deficiencias');
                Otros_suministro_Acciones=validacion('Otros_suministro_Acciones');
                subrasarse_suministro_Deficiencias=validacion('subrasarse_suministro_Deficiencias');
                subrasarse_suministro_Acciones=validacion('subrasarse_suministro_Acciones');


            if (personal_total === false) {
                $("#exito").hide();
                $("#error").show();
            } else {
                $("#error").hide();
                $("#exito").show();
            }
        }
    else {
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        }
    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });

});
function validacion(campo){
    var a=0;
    if (campo==='direccion'){
        direccion = document.getElementById(campo).value;
        if( direccion == null || direccion.length == 0 || /^\s+$/.test(direccion) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo dureccion Obligatorio").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='fecha_progra'){
        fecha_progra = document.getElementById(campo).value;
        if( fecha_progra == null || fecha_progra.length == 0 || /^\s+$/.test(fecha_progra) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Fecha Programacion Obligatorio").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='fecha_ejecu'){
        fecha_ejecu = document.getElementById(campo).value;
        if( fecha_ejecu == null || fecha_ejecu.length == 0 || /^\s+$/.test(fecha_ejecu) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Fecha Ejecucion Obligatorio").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='magis'){
        indice = document.getElementById(campo).selectedIndex;

        if( indice == null || indice == 0 ) {
            iziToast.warning({
                title: 'Caution',
                message: 'Campo Magistrado Obligatorio',
            });
            return false;
        }

    }
    //validacion de las areas judiciales
    if (campo==='personal_total'){
        personal_total = document.getElementById(campo).value;
        if( personal_total == null || personal_total.length == 0 || /^\s+$/.test(personal_total) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Personal total Obligatorio").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }


    if (campo==='observacion_1_Personal'){
        observacion_1_Personal = document.getElementById(campo).value;
        if( observacion_1_Personal == null || observacion_1_Personal.length == 0 || /^\s+$/.test(observacion_1_Personal) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='observacion_2_Personal'){
        observacion_2_Personal = document.getElementById(campo).value;
        if( observacion_2_Personal == null || observacion_2_Personal.length == 0 || /^\s+$/.test(observacion_2_Personal) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Mesa_Partes_areas_apoyo_Deficiencias'){
        Mesa_Partes_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Mesa_Partes_areas_apoyo_Deficiencias == null || Mesa_Partes_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Mesa_Partes_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Mesa_Partes_areas_apoyo_Acciones'){
        Mesa_Partes_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( Mesa_Partes_areas_apoyo_Acciones == null || Mesa_Partes_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(Mesa_Partes_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='archivo_areas_apoyo_Deficiencias'){
        archivo_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( archivo_areas_apoyo_Deficiencias == null || archivo_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(archivo_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='archivo_areas_apoyo_Acciones'){
        archivo_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( archivo_areas_apoyo_Acciones == null || archivo_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(archivo_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Notificaciones_areas_apoyo_Deficiencias'){
        Notificaciones_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Notificaciones_areas_apoyo_Deficiencias == null || Notificaciones_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Notificaciones_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Notificaciones_areas_apoyo_Acciones'){
        Notificaciones_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( Notificaciones_areas_apoyo_Acciones == null || Notificaciones_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(Notificaciones_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Publicaciones_areas_apoyo_Deficiencias'){
        Publicaciones_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Publicaciones_areas_apoyo_Deficiencias == null || Publicaciones_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Publicaciones_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Publicaciones_areas_apoyo_Archivos'){
        Publicaciones_areas_apoyo_Archivos = document.getElementById(campo).value;
        if( Publicaciones_areas_apoyo_Archivos == null || Publicaciones_areas_apoyo_Archivos.length == 0 || /^\s+$/.test(Publicaciones_areas_apoyo_Archivos) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Convenio_reniec_areas_apoyo_Deficiencias'){
        Convenio_reniec_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Convenio_reniec_areas_apoyo_Deficiencias == null || Convenio_reniec_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Convenio_reniec_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Convenio_reniec_areas_apoyo_Acciones'){
        Convenio_reniec_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( Convenio_reniec_areas_apoyo_Acciones == null || Convenio_reniec_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(Convenio_reniec_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Requisitorias_areas_apoyo_Deficiencias'){
        Requisitorias_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Requisitorias_areas_apoyo_Deficiencias == null || Requisitorias_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Requisitorias_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Requisitorias_areas_apoyo_Acciones'){
        Requisitorias_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( Requisitorias_areas_apoyo_Acciones == null || Requisitorias_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(Requisitorias_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_areas_apoyo_Deficiencias'){
        Otros_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( Otros_areas_apoyo_Deficiencias == null || Otros_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(Otros_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_areas_apoyo_Acciones'){
        Otros_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( Otros_areas_apoyo_Acciones == null || Otros_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(Otros_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_areas_apoyo_Deficiencias'){
        subrasarse_areas_apoyo_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_areas_apoyo_Deficiencias == null || subrasarse_areas_apoyo_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_areas_apoyo_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_areas_apoyo_Acciones'){
        subrasarse_areas_apoyo_Acciones = document.getElementById(campo).value;
        if( subrasarse_areas_apoyo_Acciones == null || subrasarse_areas_apoyo_Acciones.length == 0 || /^\s+$/.test(subrasarse_areas_apoyo_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Mensajería_aspectos_logisticos_Deficiencias'){
        Mensajería_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Mensajería_aspectos_logisticos_Deficiencias == null || Mensajería_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Mensajería_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Mensajería_aspectos_logisticos_Acciones'){
        Mensajería_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Mensajería_aspectos_logisticos_Acciones == null || Mensajería_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Mensajería_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Fotocopiado_aspectos_logisticos_Deficiencias'){
        Fotocopiado_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Fotocopiado_aspectos_logisticos_Deficiencias == null || Fotocopiado_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Fotocopiado_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Fotocopiado_aspectos_logisticos_Acciones'){
        Fotocopiado_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Fotocopiado_aspectos_logisticos_Acciones == null || Fotocopiado_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Fotocopiado_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Limpieza_aspectos_logisticos_Deficiencias'){
        Limpieza_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Limpieza_aspectos_logisticos_Deficiencias == null || Limpieza_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Limpieza_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Limpieza_aspectos_logisticos_Acciones'){
        Limpieza_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Limpieza_aspectos_logisticos_Acciones == null || Limpieza_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Limpieza_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Traducciones_aspectos_logisticos_Deficiencias'){
        Traducciones_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Traducciones_aspectos_logisticos_Deficiencias == null || Traducciones_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Traducciones_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Traducciones_aspectos_logisticos_Archivos'){
        Traducciones_aspectos_logisticos_Archivos = document.getElementById(campo).value;
        if( Traducciones_aspectos_logisticos_Archivos == null || Traducciones_aspectos_logisticos_Archivos.length == 0 || /^\s+$/.test(Traducciones_aspectos_logisticos_Archivos) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Publicaciones_aspectos_logisticos_Deficiencias'){
        Publicaciones_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Publicaciones_aspectos_logisticos_Deficiencias == null || Publicaciones_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Publicaciones_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Publicaciones_aspectos_logisticos_Acciones'){
        Publicaciones_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Publicaciones_aspectos_logisticos_Acciones == null || Publicaciones_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Publicaciones_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Arrendamiento_aspectos_logisticos_Deficiencias'){
        Arrendamiento_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Arrendamiento_aspectos_logisticos_Deficiencias == null || Arrendamiento_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Arrendamiento_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Arrendamiento_aspectos_logisticos_Acciones'){
        Arrendamiento_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Arrendamiento_aspectos_logisticos_Acciones == null || Arrendamiento_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Arrendamiento_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias'){
        Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias == null || Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Mantenimiento_vehiculos_aspectos_logisticos_Acciones'){
        Mantenimiento_vehiculos_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Mantenimiento_vehiculos_aspectos_logisticos_Acciones == null || Mantenimiento_vehiculos_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Mantenimiento_vehiculos_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_aspectos_logisticos_Deficiencias'){
        Otros_aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Otros_aspectos_logisticos_Deficiencias == null || Otros_aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(Otros_aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_aspectos_logisticos_Acciones'){
        Otros_aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( Otros_aspectos_logisticos_Acciones == null || Otros_aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(Otros_aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_Aspectos_logisticos_Deficiencias'){
        subrasarse_Aspectos_logisticos_Deficiencias = document.getElementById(campo).value;
        if( Traducciones_aspectos_logisticos_Deficiencias == null || subrasarse_Aspectos_logisticos_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_logisticos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_Aspectos_logisticos_Acciones'){
        subrasarse_Aspectos_logisticos_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_logisticos_Acciones == null || subrasarse_Aspectos_logisticos_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_logisticos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }


    if (campo==='Energía_servicio_bascios_Deficiencias'){
        Energía_servicio_bascios_Deficiencias = document.getElementById(campo).value;
        if( Energía_servicio_bascios_Deficiencias == null || Energía_servicio_bascios_Deficiencias.length == 0 || /^\s+$/.test(Energía_servicio_bascios_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Energía_servicio_bascios_Acciones'){
        Energía_servicio_bascios_Acciones = document.getElementById(campo).value;
        if( Energía_servicio_bascios_Acciones == null || Energía_servicio_bascios_Acciones.length == 0 || /^\s+$/.test(Energía_servicio_bascios_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Agua_servicio_bascios_Deficiencias'){
        Agua_servicio_bascios_Deficiencias = document.getElementById(campo).value;
        if( Agua_servicio_bascios_Deficiencias == null || Agua_servicio_bascios_Deficiencias.length == 0 || /^\s+$/.test(Agua_servicio_bascios_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Agua_servicio_bascios_Acciones'){
        Agua_servicio_bascios_Acciones = document.getElementById(campo).value;
        if( Agua_servicio_bascios_Acciones == null || Agua_servicio_bascios_Acciones.length == 0 || /^\s+$/.test(Agua_servicio_bascios_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Telefonía_servicio_bascios_Deficiencias'){
        Telefonía_servicio_bascios_Deficiencias = document.getElementById(campo).value;
        if( Telefonía_servicio_bascios_Deficiencias == null || Telefonía_servicio_bascios_Deficiencias.length == 0 || /^\s+$/.test(Telefonía_servicio_bascios_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Telefonía_servicio_bascios_Acciones'){
        Telefonía_servicio_bascios_Acciones = document.getElementById(campo).value;
        if( Telefonía_servicio_bascios_Acciones == null || Telefonía_servicio_bascios_Acciones.length == 0 || /^\s+$/.test(Telefonía_servicio_bascios_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_servicios_basicos_Deficiencias'){
        Otros_servicios_basicos_Deficiencias = document.getElementById(campo).value;
        if( Otros_servicios_basicos_Deficiencias == null || Otros_servicios_basicos_Deficiencias.length == 0 || /^\s+$/.test(Otros_servicios_basicos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_servicios_basicos_Acciones'){
        Otros_servicios_basicos_Acciones = document.getElementById(campo).value;
        if( Otros_servicios_basicos_Acciones == null || Otros_servicios_basicos_Acciones.length == 0 || /^\s+$/.test(Otros_servicios_basicos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_servicios_basicos_Deficiencias'){
        subrasarse_servicios_basicos_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_servicios_basicos_Deficiencias == null || subrasarse_servicios_basicos_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_servicios_basicos_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_servicios_basicos_Acciones'){
        subrasarse_servicios_basicos_Acciones = document.getElementById(campo).value;
        if( subrasarse_servicios_basicos_Acciones == null || subrasarse_servicios_basicos_Acciones.length == 0 || /^\s+$/.test(subrasarse_servicios_basicos_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Armarios_mobiliario_Deficiencias'){
        Armarios_mobiliario_Deficiencias = document.getElementById(campo).value;
        if( Armarios_mobiliario_Deficiencias == null || Armarios_mobiliario_Deficiencias.length == 0 || /^\s+$/.test(Armarios_mobiliario_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Armarios_mobiliario_Acciones'){
        Armarios_mobiliario_Acciones = document.getElementById(campo).value;
        if( Armarios_mobiliario_Acciones == null || Armarios_mobiliario_Acciones.length == 0 || /^\s+$/.test(Armarios_mobiliario_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Estantería_mobiliario_Deficiencias'){
        Estantería_mobiliario_Deficiencias = document.getElementById(campo).value;
        if( Estantería_mobiliario_Deficiencias == null || Estantería_mobiliario_Deficiencias.length == 0 || /^\s+$/.test(Estantería_mobiliario_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Estantería_mobiliario_Acciones'){
        Estantería_mobiliario_Acciones = document.getElementById(campo).value;
        if( Estantería_mobiliario_Acciones == null || Estantería_mobiliario_Acciones.length == 0 || /^\s+$/.test(Estantería_mobiliario_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }


    if (campo==='Escritorios_mobiliario_Deficiencias'){
        Escritorios_mobiliario_Deficiencias = document.getElementById(campo).value;
        if( Escritorios_mobiliario_Deficiencias == null || Escritorios_mobiliario_Deficiencias.length == 0 || /^\s+$/.test(Escritorios_mobiliario_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Escritorios_mobiliario_Acciones'){
        Escritorios_mobiliario_Acciones = document.getElementById(campo).value;
        if( Escritorios_mobiliario_Acciones == null || Escritorios_mobiliario_Acciones.length == 0 || /^\s+$/.test(Escritorios_mobiliario_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Sillas_mobiliario_Deficiencias'){
        Sillas_mobiliario_Deficiencias = document.getElementById(campo).value;
        if( Sillas_mobiliario_Deficiencias == null || Sillas_mobiliario_Deficiencias.length == 0 || /^\s+$/.test(Sillas_mobiliario_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Sillas_mobiliario_Archivos'){
        Sillas_mobiliario_Archivos = document.getElementById(campo).value;
        if( Sillas_mobiliario_Archivos == null || Sillas_mobiliario_Archivos.length == 0 || /^\s+$/.test(Sillas_mobiliario_Archivos) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Módulos_computadoras_mobiliarios_Deficiencias'){
        Módulos_computadoras_mobiliarios_Deficiencias = document.getElementById(campo).value;
        if( Módulos_computadoras_mobiliarios_Deficiencias == null || Módulos_computadoras_mobiliarios_Deficiencias.length == 0 || /^\s+$/.test(Módulos_computadoras_mobiliarios_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Módulos_computadoras_mobiliarios_Acciones'){
        Módulos_computadoras_mobiliarios_Acciones = document.getElementById(campo).value;
        if( Módulos_computadoras_mobiliarios_Acciones == null || Módulos_computadoras_mobiliarios_Acciones.length == 0 || /^\s+$/.test(Módulos_computadoras_mobiliarios_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='otros_mobiliario_Deficiencias'){
        otros_mobiliario_Deficiencias = document.getElementById(campo).value;
        if( otros_mobiliario_Deficiencias == null || otros_mobiliario_Deficiencias.length == 0 || /^\s+$/.test(otros_mobiliario_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='otros_mobiliario_Acciones'){
        otros_mobiliario_Acciones = document.getElementById(campo).value;
        if( otros_mobiliario_Acciones == null || otros_mobiliario_Acciones.length == 0 || /^\s+$/.test(otros_mobiliario_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_mobiliarios_Deficiencias'){
        subrasarse_mobiliarios_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_mobiliarios_Deficiencias == null || subrasarse_mobiliarios_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_mobiliarios_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_mobiliarios_Acciones'){
        subrasarse_mobiliarios_Acciones = document.getElementById(campo).value;
        if( subrasarse_mobiliarios_Acciones == null || subrasarse_mobiliarios_Acciones.length == 0 || /^\s+$/.test(subrasarse_mobiliarios_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Papel_suministro_Deficiencias'){
        Papel_suministro_Deficiencias = document.getElementById(campo).value;
        if( Papel_suministro_Deficiencias == null || Papel_suministro_Deficiencias.length == 0 || /^\s+$/.test(Papel_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Papel_suministro_Acciones'){
        Papel_suministro_Acciones = document.getElementById(campo).value;
        if( Papel_suministro_Acciones == null || Papel_suministro_Acciones.length == 0 || /^\s+$/.test(Papel_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Bolígrafos_suministro_Deficiencias'){
        Bolígrafos_suministro_Deficiencias = document.getElementById(campo).value;
        if( Bolígrafos_suministro_Deficiencias == null || Bolígrafos_suministro_Deficiencias.length == 0 || /^\s+$/.test(Bolígrafos_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Bolígrafos_suministro_Acciones'){
        Bolígrafos_suministro_Acciones = document.getElementById(campo).value;
        if( Bolígrafos_suministro_Acciones == null || Bolígrafos_suministro_Acciones.length == 0 || /^\s+$/.test(Bolígrafos_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Cinta_suministro_Deficiencias'){
        Cinta_suministro_Deficiencias = document.getElementById(campo).value;
        if( Cinta_suministro_Deficiencias == null || Cinta_suministro_Deficiencias.length == 0 || /^\s+$/.test(Cinta_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Cinta_suministro_Acciones'){
        Cinta_suministro_Acciones = document.getElementById(campo).value;
        if( Cinta_suministro_Acciones == null || Cinta_suministro_Acciones.length == 0 || /^\s+$/.test(Cinta_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Carátulas_suministro_Deficiencias'){
        Carátulas_suministro_Deficiencias = document.getElementById(campo).value;
        if( Carátulas_suministro_Deficiencias == null || Carátulas_suministro_Deficiencias.length == 0 || /^\s+$/.test(Carátulas_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Carátulas_suministro_Acciones'){
        Carátulas_suministro_Acciones = document.getElementById(campo).value;
        if( Carátulas_suministro_Acciones == null || Carátulas_suministro_Acciones.length == 0 || /^\s+$/.test(Carátulas_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Peruano_suministro_Deficiencias'){
        Peruano_suministro_Deficiencias = document.getElementById(campo).value;
        if( Peruano_suministro_Deficiencias == null || Peruano_suministro_Deficiencias.length == 0 || /^\s+$/.test(Peruano_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Peruano_suministro_Archivos'){
        Peruano_suministro_Archivos = document.getElementById(campo).value;
        if( Peruano_suministro_Archivos == null || Peruano_suministro_Archivos.length == 0 || /^\s+$/.test(Peruano_suministro_Archivos) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }

    if (campo==='Otros_suministro_Deficiencias'){
        Otros_suministro_Deficiencias = document.getElementById(campo).value;
        if( Otros_suministro_Deficiencias == null || Otros_suministro_Deficiencias.length == 0 || /^\s+$/.test(Otros_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='Otros_suministro_Acciones'){
        Otros_suministro_Acciones = document.getElementById(campo).value;
        if( Otros_suministro_Acciones == null || Otros_suministro_Acciones.length == 0 || /^\s+$/.test(Otros_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_suministro_Deficiencias'){
        subrasarse_suministro_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_suministro_Deficiencias == null || subrasarse_suministro_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_suministro_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
    if (campo==='subrasarse_suministro_Acciones'){
        subrasarse_suministro_Acciones = document.getElementById(campo).value;
        if( subrasarse_suministro_Acciones == null || subrasarse_suministro_Acciones.length == 0 || /^\s+$/.test(subrasarse_suministro_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback' style='margin-right: 10px;'></span>");
            return false;

        }
        else{
            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#'+campo).parent().children('span').hide();
            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback' style='margin-right: 10px;'></span>");
            return true;

        }
    }
}
function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();

}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
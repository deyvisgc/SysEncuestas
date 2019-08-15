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
        var Estantería_mobiliario_Deficiencias=$('#Estantería_mobiliario_Deficiencias').val();
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










        if (
            personal_total === ''||
            observacion_1_Personal===''||
            observacion_2_Personal==='' ||
            Mesa_Partes_areas_apoyo_Deficiencias === '' ||
            Mesa_Partes_areas_apoyo_Acciones==='' ||
            archivo_areas_apoyo_Deficiencias==='' ||
            archivo_areas_apoyo_Acciones === ''||
            Notificaciones_areas_apoyo_Deficiencias==='' ||
            Notificaciones_areas_apoyo_Acciones==='' ||
            Publicaciones_areas_apoyo_Deficiencias === ''||
            Publicaciones_areas_apoyo_Archivos==='' ||
            Convenio_reniec_areas_apoyo_Deficiencias==='' ||
            Convenio_reniec_areas_apoyo_Acciones==='' ||
            Requisitorias_areas_apoyo_Deficiencias===''  ||
            Requisitorias_areas_apoyo_Acciones==='' ||
            Otros_areas_apoyo_Deficiencias==='' ||
            Otros_areas_apoyo_Acciones===''||
            subrasarse_areas_apoyo_Deficiencias ===''||
            subrasarse_areas_apoyo_Acciones==='' ||
            //personal y area de aópoyo
            Mensajería_aspectos_logisticos_Deficiencias===''  ||
            Mensajería_aspectos_logisticos_Acciones === ''||
            Fotocopiado_aspectos_logisticos_Deficiencias===''||
            Fotocopiado_aspectos_logisticos_Acciones==='' ||
            Limpieza_aspectos_logisticos_Deficiencias === '' ||
            Limpieza_aspectos_logisticos_Acciones==='' ||
            Traducciones_aspectos_logisticos_Deficiencias==='' ||
            Traducciones_aspectos_logisticos_Archivos === ''||
            Publicaciones_aspectos_logisticos_Deficiencias==='' ||
            Publicaciones_aspectos_logisticos_Acciones==='' ||
            Arrendamiento_aspectos_logisticos_Deficiencias === ''||
            Arrendamiento_aspectos_logisticos_Acciones==='' ||
            Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias==='' ||
            Mantenimiento_vehiculos_aspectos_logisticos_Acciones==='' ||
            Otros_aspectos_logisticos_Deficiencias===''  ||
            Otros_aspectos_logisticos_Acciones==='' ||
            subrasarse_Aspectos_logisticos_Deficiencias==='' ||
            subrasarse_Aspectos_logisticos_Acciones===''  ||
        //aspectos logisticos

            Energía_servicio_bascios_Deficiencias==='' ||
            Energía_servicio_bascios_Acciones==='' ||
            Agua_servicio_bascios_Deficiencias==='' ||
            Agua_servicio_bascios_Acciones==='' ||
            Telefonía_servicio_bascios_Deficiencias===''||
            Telefonía_servicio_bascios_Acciones===''||
            Otros_servicios_basicos_Deficiencias===''||
            Otros_servicios_basicos_Acciones===''||
            subrasarse_servicios_basicos_Deficiencias===''||
            subrasarse_servicios_basicos_Acciones===''||
          //fin de servicios

            Armarios_mobiliario_Deficiencias===''||
         Armarios_mobiliario_Acciones===''||
            Estantería_mobiliario_Deficiencias===''||
         Estantería_mobiliario_Acciones===''||
         Escritorios_mobiliario_Deficiencias===''||
         Escritorios_mobiliario_Acciones===''||
         Sillas_mobiliario_Deficiencias===''||
         Sillas_mobiliario_Archivos===''||
         Módulos_computadoras_mobiliarios_Deficiencias===''||
         Módulos_computadoras_mobiliarios_Acciones===''||
         otros_mobiliario_Deficiencias===''||
         otros_mobiliario_Acciones===''||
         subrasarse_mobiliarios_Deficiencias===''||
         subrasarse_mobiliarios_Acciones===''||
        //fin mobiliarios
             Papel_suministro_Deficiencias===''||
         Papel_suministro_Acciones===''||
         Bolígrafos_suministro_Deficiencias===''||
         Bolígrafos_suministro_Acciones===''||
         Cinta_suministro_Deficiencias===''||
         Cinta_suministro_Acciones===''||
         Carátulas_suministro_Deficiencias===''||
         Carátulas_suministro_Acciones===''||
         Peruano_suministro_Deficiencias===''||
         Peruano_suministro_Archivos===''||
         Otros_suministro_Deficiencias===''||
         Otros_suministro_Acciones===''||
         subrasarse_suministro_Deficiencias===''||
         subrasarse_suministro_Acciones===''
        )





        {
            var personal_total = 0,observacion_1_Personal=0,observacion_2_Personal=0,Mesa_Partes_areas_apoyo_Deficiencias=0,Mesa_Partes_areas_apoyo_Acciones=0,
                archivo_areas_apoyo_Deficiencias=0,archivo_areas_apoyo_Acciones=0,Notificaciones_areas_apoyo_Deficiencias=0,Notificaciones_areas_apoyo_Acciones=0,
                Publicaciones_areas_apoyo_Deficiencias=0,Publicaciones_areas_apoyo_Archivos=0,Convenio_reniec_areas_apoyo_Deficiencias=0,
                Convenio_reniec_areas_apoyo_Acciones=0, Requisitorias_areas_apoyo_Deficiencias=0,Requisitorias_areas_apoyo_Acciones=0,Otros_areas_apoyo_Deficiencias=0,
                Otros_areas_apoyo_Acciones=0, subrasarse_areas_apoyo_Deficiencias=0,subrasarse_areas_apoyo_Acciones=0 ,
//personal y area de aópoyo
                Mensajería_aspectos_logisticos_Deficiencias=0,Mensajería_aspectos_logisticos_Acciones=0,Fotocopiado_aspectos_logisticos_Deficiencias=0,Fotocopiado_aspectos_logisticos_Acciones=0,
                Limpieza_aspectos_logisticos_Deficiencias=0,Limpieza_aspectos_logisticos_Acciones=0,Traducciones_aspectos_logisticos_Deficiencias=0,Traducciones_aspectos_logisticos_Archivos=0,
                Publicaciones_aspectos_logisticos_Deficiencias=0,Publicaciones_aspectos_logisticos_Acciones=0,Arrendamiento_aspectos_logisticos_Deficiencias=0,Arrendamiento_aspectos_logisticos_Acciones=0,
                Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias=0,Mantenimiento_vehiculos_aspectos_logisticos_Acciones=0,Otros_aspectos_logisticos_Deficiencias=0,
                Otros_aspectos_logisticos_Acciones=0,subrasarse_Aspectos_logisticos_Deficiencias=0,subrasarse_Aspectos_logisticos_Acciones=0
                //aspectos logisticos
            Energía_servicio_bascios_Deficiencias=0, Energía_servicio_bascios_Acciones=0,Agua_servicio_bascios_Deficiencias=0, Agua_servicio_bascios_Acciones=0,
            Telefonía_servicio_bascios_Deficiencias=0,Telefonía_servicio_bascios_Acciones=0,Otros_servicios_basicos_Deficiencias=0,Otros_servicios_basicos_Acciones=0,
            subrasarse_servicios_basicos_Deficiencias=0,subrasarse_servicios_basicos_Acciones=0,

            Armarios_mobiliario_Deficiencias=0;
            Armarios_mobiliario_Acciones=0;
            Estantería_mobiliario_Deficiencias=0;
            Estantería_mobiliario_Acciones=0;
            Escritorios_mobiliario_Deficiencias=0;
            Escritorios_mobiliario_Acciones=0;
            Sillas_mobiliario_Deficiencias=0;
            Sillas_mobiliario_Archivos=0;
            Módulos_computadoras_mobiliarios_Deficiencias=0;
            Módulos_computadoras_mobiliarios_Acciones=0;
            otros_mobiliario_Deficiencias=0;
            otros_mobiliario_Acciones=0;
            subrasarse_mobiliarios_Deficiencias=0;
            subrasarse_mobiliarios_Acciones=0;
            //fin mobiliarios
            Papel_suministro_Deficiencias=0;
            Papel_suministro_Acciones=0;
            Bolígrafos_suministro_Deficiencias=0;
            Bolígrafos_suministro_Acciones=0;
            Cinta_suministro_Deficiencias=0;
            Cinta_suministro_Acciones=0;
            Carátulas_suministro_Deficiencias=0;
            Carátulas_suministro_Acciones=0;
            Peruano_suministro_Deficiencias=0;
            Peruano_suministro_Archivos=0;
            Otros_suministro_Deficiencias=0;
            Otros_suministro_Acciones=0;
            subrasarse_suministro_Deficiencias=0;
            subrasarse_suministro_Acciones=0;




        ;

            personal_total = validacion('personal_total');
            observacion_1_Personal = validacion('observacion_1_Personal');
            observacion_2_Personal = validacion('observacion_2_Personal');
            Mesa_Partes_areas_apoyo_Deficiencias= validacion('Mesa_Partes_areas_apoyo_Deficiencias');
            Mesa_Partes_areas_apoyo_Acciones=validacion('Mesa_Partes_areas_apoyo_Acciones');
            archivo_areas_apoyo_Deficiencias=validacion('archivo_areas_apoyo_Deficiencias');
            archivo_areas_apoyo_Acciones=validacion('archivo_areas_apoyo_Acciones');
            Notificaciones_areas_apoyo_Deficiencias=validacion('Notificaciones_areas_apoyo_Deficiencias');
            Notificaciones_areas_apoyo_Acciones=validacion('Notificaciones_areas_apoyo_Acciones');
            Publicaciones_areas_apoyo_Deficiencias=validacion('Publicaciones_areas_apoyo_Deficiencias');
            Publicaciones_areas_apoyo_Archivos=validacion('Publicaciones_areas_apoyo_Archivos');
            Convenio_reniec_areas_apoyo_Deficiencias=validacion('Convenio_reniec_areas_apoyo_Deficiencias');
            Convenio_reniec_areas_apoyo_Acciones=validacion('Convenio_reniec_areas_apoyo_Acciones');
            Requisitorias_areas_apoyo_Deficiencias=validacion('Requisitorias_areas_apoyo_Deficiencias');
            Requisitorias_areas_apoyo_Acciones=validacion('Requisitorias_areas_apoyo_Acciones');
            Otros_areas_apoyo_Deficiencias=validacion('Otros_areas_apoyo_Deficiencias');
            Otros_areas_apoyo_Acciones=validacion('Otros_areas_apoyo_Acciones');
            subrasarse_areas_apoyo_Deficiencias=validacion('subrasarse_areas_apoyo_Deficiencias');
            subrasarse_areas_apoyo_Acciones=validacion('subrasarse_areas_apoyo_Acciones');
            //personal y area de aópoyo

            Mensajería_aspectos_logisticos_Deficiencias=validacion('Mensajería_aspectos_logisticos_Deficiencias');
            Mensajería_aspectos_logisticos_Acciones =validacion('Mensajería_aspectos_logisticos_Acciones');
            Fotocopiado_aspectos_logisticos_Deficiencias=validacion('Fotocopiado_aspectos_logisticos_Deficiencias');
            Fotocopiado_aspectos_logisticos_Acciones==validacion('Fotocopiado_aspectos_logisticos_Acciones');
            Limpieza_aspectos_logisticos_Deficiencias =validacion('Limpieza_aspectos_logisticos_Deficiencias');
            Limpieza_aspectos_logisticos_Acciones=validacion('Limpieza_aspectos_logisticos_Acciones');
            Traducciones_aspectos_logisticos_Deficiencias=validacion('Traducciones_aspectos_logisticos_Deficiencias');
            Traducciones_aspectos_logisticos_Archivos =validacion('Traducciones_aspectos_logisticos_Archivos');
            Publicaciones_aspectos_logisticos_Deficiencias=validacion('Publicaciones_aspectos_logisticos_Deficiencias');
            Publicaciones_aspectos_logisticos_Acciones=validacion('Publicaciones_aspectos_logisticos_Acciones');
            Arrendamiento_aspectos_logisticos_Deficiencias =validacion('Arrendamiento_aspectos_logisticos_Deficiencias');
            Arrendamiento_aspectos_logisticos_Acciones=validacion('Arrendamiento_aspectos_logisticos_Acciones');
            Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias=validacion('Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias');
            Mantenimiento_vehiculos_aspectos_logisticos_Acciones=validacion('Mantenimiento_vehiculos_aspectos_logisticos_Acciones');
            Otros_aspectos_logisticos_Deficiencias=validacion('Otros_aspectos_logisticos_Deficiencias');
            Otros_aspectos_logisticos_Acciones=validacion('Otros_aspectos_logisticos_Acciones');
            subrasarse_Aspectos_logisticos_Deficiencias=validacion('subrasarse_Aspectos_logisticos_Deficiencias');
            subrasarse_Aspectos_logisticos_Acciones=validacion('subrasarse_Aspectos_logisticos_Acciones');
///                aspectos logisticos


            Energía_servicio_bascios_Deficiencias=validacion('Energía_servicio_bascios_Deficiencias');
            Energía_servicio_bascios_Acciones=validacion('Energía_servicio_bascios_Acciones');
            Agua_servicio_bascios_Deficiencias=validacion('Agua_servicio_bascios_Deficiencias');
            Agua_servicio_bascios_Acciones=validacion('Agua_servicio_bascios_Acciones');
            Telefonía_servicio_bascios_Deficiencias=validacion('Telefonía_servicio_bascios_Deficiencias');
            Telefonía_servicio_bascios_Acciones=validacion('Telefonía_servicio_bascios_Acciones');
            Otros_servicios_basicos_Deficiencias=validacion('Otros_servicios_basicos_Deficiencias');
            Otros_servicios_basicos_Acciones=validacion('Otros_servicios_basicos_Acciones');
            subrasarse_servicios_basicos_Deficiencias=validacion('subrasarse_servicios_basicos_Deficiencias');
            subrasarse_servicios_basicos_Acciones=validacion('subrasarse_servicios_basicos_Acciones');
            //servicios basicos

            Armarios_mobiliario_Deficiencias=validacion('Armarios_mobiliario_Deficiencias');
            Armarios_mobiliario_Acciones=validacion('Armarios_mobiliario_Acciones');
            Estantería_mobiliario_Deficiencias=validacion('Estantería_mobiliario_Deficiencias');
            Estantería_mobiliario_Acciones=validacion('Estantería_mobiliario_Acciones');
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
              //fin mobiliarios

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

            if (personal_total === false || observacion_1_Personal===false||observacion_2_Personal===false || Mesa_Partes_areas_apoyo_Deficiencias===false||
                Mesa_Partes_areas_apoyo_Acciones===false||  archivo_areas_apoyo_Deficiencias===false || archivo_areas_apoyo_Acciones===false||
                Notificaciones_areas_apoyo_Deficiencias===false || Notificaciones_areas_apoyo_Acciones===false || Publicaciones_areas_apoyo_Deficiencias===false
                ||Publicaciones_areas_apoyo_Archivos===false || Convenio_reniec_areas_apoyo_Deficiencias===false  || Convenio_reniec_areas_apoyo_Acciones===false
                || Requisitorias_areas_apoyo_Deficiencias===false  || Requisitorias_areas_apoyo_Acciones===false || Otros_areas_apoyo_Deficiencias===false
                || Otros_areas_apoyo_Acciones===false   || subrasarse_areas_apoyo_Deficiencias===false || subrasarse_areas_apoyo_Acciones===false||
                //personal y area de aópoyo

                Mensajería_aspectos_logisticos_Deficiencias===false ||
                Mensajería_aspectos_logisticos_Acciones === false||
                Fotocopiado_aspectos_logisticos_Deficiencias===false||
                Fotocopiado_aspectos_logisticos_Acciones===false ||
                Limpieza_aspectos_logisticos_Deficiencias === false ||
                Limpieza_aspectos_logisticos_Acciones===false ||
                Traducciones_aspectos_logisticos_Deficiencias===false ||
                Traducciones_aspectos_logisticos_Archivos === false ||
                Publicaciones_aspectos_logisticos_Deficiencias===false ||
                Publicaciones_aspectos_logisticos_Acciones=== false ||
                Arrendamiento_aspectos_logisticos_Deficiencias === false||
                Arrendamiento_aspectos_logisticos_Acciones=== false ||
                Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias===false ||
                Mantenimiento_vehiculos_aspectos_logisticos_Acciones===false ||
                Otros_aspectos_logisticos_Deficiencias===false ||
                Otros_aspectos_logisticos_Acciones===false ||
                subrasarse_Aspectos_logisticos_Deficiencias===false ||
                subrasarse_Aspectos_logisticos_Acciones===false ||
            //aspectos logisticoss

                Energía_servicio_bascios_Deficiencias===false ||
                Energía_servicio_bascios_Acciones===false ||
                Agua_servicio_bascios_Deficiencias===false ||
                Agua_servicio_bascios_Acciones===false||
                Telefonía_servicio_bascios_Deficiencias===false||
                Telefonía_servicio_bascios_Acciones===false||
                Otros_servicios_basicos_Deficiencias===false||
                Otros_servicios_basicos_Acciones===false||
                subrasarse_servicios_basicos_Deficiencias===false||
                subrasarse_servicios_basicos_Acciones===false ||
                Armarios_mobiliario_Deficiencias===false||
                Armarios_mobiliario_Acciones===false||
                Estantería_mobiliario_Deficiencias===false||
                Estantería_mobiliario_Acciones===false||
                Escritorios_mobiliario_Deficiencias===false||
                Escritorios_mobiliario_Acciones===false||
                Sillas_mobiliario_Deficiencias===false||
                Sillas_mobiliario_Archivos===false||
                Módulos_computadoras_mobiliarios_Deficiencias===false||
                Módulos_computadoras_mobiliarios_Acciones===false||
                otros_mobiliario_Deficiencias===false||
                otros_mobiliario_Acciones===false||
                subrasarse_mobiliarios_Deficiencias===false||
                subrasarse_mobiliarios_Acciones===false||
            //fin mobiliarios

                Papel_suministro_Deficiencias===false||
                Papel_suministro_Acciones===false||
                Bolígrafos_suministro_Deficiencias===false||
                Bolígrafos_suministro_Acciones===false||
                Cinta_suministro_Deficiencias===false||
                Cinta_suministro_Acciones===false||
                Carátulas_suministro_Deficiencias===false||
                Carátulas_suministro_Acciones===false||
                Peruano_suministro_Deficiencias===false||
                Peruano_suministro_Archivos===false||
                Otros_suministro_Deficiencias===false||
                Otros_suministro_Acciones===false||
                subrasarse_suministro_Deficiencias===false||
                subrasarse_suministro_Acciones===false


            ) {
                $("#exito").hide();
                $("#error").show();
            } else {
                $("#error").hide();
                $("#exito").show();
            }
        }
    else {

        alert('sssss')
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        }
    });
    $('#next2').click(function (e) {
        e.preventDefault();
     var Computadoras_informaticos_Deficiencias=$('#Computadoras_informaticos_Deficiencias').val();
     var  Computadoras_informaticos__Acciones=$('#Computadoras_informaticos__Acciones').val();
     var Impresoras_informaticos_Deficiencias= $('#Impresoras_informaticos_Deficiencias').val();
     var Impresoras_informaticos_Acciones=$('#Impresoras_informaticos_Acciones').val();
     var Fax_Informaticos_Deficiencias= $('#Fax_Informaticos_Deficiencias').val();
     var Fax_informaticos_Acciones= $('#Fax_informaticos_Acciones').val();
     var Mantenimiento_equipos_Informaticos_Deficiencias=$('#Mantenimiento_equipos_Informaticos_Deficiencias').val();
     var Mantenimiento_equipos_Informaticos_Acciones=$('#Mantenimiento_equipos_Informaticos_Acciones').val();
     var UPS_Informaticos_Deficiencias= $('#UPS_Informaticos_Deficiencias').val();
     var UPS_Informaticos_Acciones=$('#UPS_Informaticos_Acciones').val();
     var supresor_picos_Informaticos_Deficiencias= $('#supresor_picos_Informaticos_Deficiencias').val();
     var supresor_picos_Informaticos_Acciones= $('#supresor_picos_Informaticos_Acciones').val();
     var Correo_Informaticos_Deficiencias=$('#Correo_Informaticos_Deficiencias').val();
     var  Correo_Informaticos_Acciones=$('#Correo_Informaticos_Acciones').val();
     var sistemas_Informaticos_Deficiencias= $('#sistemas_Informaticos_Deficiencias').val();
     var sistemas_Informaticos_Acciones=$('#sistemas_Informaticos_Acciones').val();
     var Redes_Informáticos_Informaticos_Deficiencias= $('#Redes_Informáticos_Informaticos_Deficiencias').val();
     var Redes_Informáticos_Informaticos_Acciones= $('#Redes_Informáticos_Informaticos_Acciones').val();
     var Otros_Informaticos_Deficiencias=$('#Otros_Informaticos_Deficiencias').val();
     var Otros_Informaticos_Acciones=$('#Otros_Informaticos_Acciones').val();
     var subrasarse_Informaticos_Deficiencias= $('#subrasarse_Informaticos_Deficiencias').val();
     var subrasarse_Informaticos_Acciones=$('#subrasarse_Informaticos_Acciones').val();
  //fin aspectos informaticos
    var Aspectos_seguridad_detectorM_Deficiencias=$('#Aspectos_seguridad_detectorM_Deficiencias').val();
    var Aspectos_seguridad_detectorM_Acciones=$('#Aspectos_seguridad_detectorM_Acciones').val();
    var Aspectos_seguridad_Extintores_Deficiencias=$('#Aspectos_seguridad_Extintores_Deficiencias').val();
    var Aspectos_seguridad_Extintores_Acciones=$('#Aspectos_seguridad_Extintores_Acciones').val();
    var Aspectos_seguridad_Mangueras_Deficiencias=$('#Aspectos_seguridad_Mangueras_Deficiencias').val();
    var Aspectos_seguridad_Mangueras_Acciones=$('#Aspectos_seguridad_Mangueras_Acciones').val();
    var Aspectos_seguridad_Otros_Deficiencias=$('#Aspectos_seguridad_Otros_Deficiencias').val();
    var Aspectos_seguridad_Otros_Acciones=$('#Aspectos_seguridad_Otros_Acciones').val();
    var subrasarse_Aspectos_seguridad_Deficiencias=$('#subrasarse_Aspectos_seguridad_Deficiencias').val();
    var subrasarse_Aspectos_seguridad_Acciones=$('#subrasarse_Aspectos_seguridad_Acciones').val();

        //fin aspectos de seguridad
        var Aspectos_generales_Estructuras_Deficiencias=$('#Aspectos_generales_Estructuras_Deficiencias').val();
        var Aspectos_generales_Estructuras_Acciones=$('#Aspectos_generales_Estructuras_Acciones').val();
        var Aspectos_generales_Puertas_Deficiencias=$('#Aspectos_generales_Puertas_Deficiencias').val();
        var Aspectos_generales_Puertas_Acciones=$('#Aspectos_generales_Puertas_Acciones').val();
        var Aspectos_generales_Ventanas_Deficiencias=$('#Aspectos_generales_Ventanas_Deficiencias').val();
        var Aspectos_generales_Ventanas_Acciones=$('#Aspectos_generales_Ventanas_Acciones').val();
        var Aspectos_generales_Pisos_Deficiencias=$('#Aspectos_generales_Pisos_Deficiencias').val();
        var Aspectos_generales_Pisos_Acciones=$('#Aspectos_generales_Pisos_Acciones').val();
        var Aspectos_generales_Pintura_Deficiencias=$('#Aspectos_generales_Pintura_Deficiencias').val();
        var Aspectos_generales_Pintura_Acciones=$('#Aspectos_generales_Pintura_Acciones').val();

        var Aspectos_generales_Instalaciones_Sanitarias_Deficiencias=$('#Aspectos_generales_Instalaciones_Sanitarias_Deficiencias').val();
        var Aspectos_generales_Instalaciones_Sanitarias_Acciones=$('#Aspectos_generales_Instalaciones_Sanitarias_Acciones').val();
        var Aspectos_generales_Instalaciones_Eléctricas_Deficiencias=$('#Aspectos_generales_Instalaciones_Eléctricas_Deficiencias').val();
        var Aspectos_generales_Instalaciones_Eléctricas_Acciones=$('#Aspectos_generales_Instalaciones_Eléctricas_Acciones').val();
        var Aspectos_generales_brinda_Seguridad_Deficiencias=$('#Aspectos_generales_brinda_Seguridad_Deficiencias').val();
        var Aspectos_generales_brinda_Seguridad_Acciones=$('#Aspectos_generales_brinda_Seguridad_Acciones').val();
        var Aspectos_generales_Mantenimiento_local_Deficiencias=$('#Aspectos_generales_Mantenimiento_local_Deficiencias').val();
        var Aspectos_generales_Mantenimiento_local_Acciones=$('#Aspectos_generales_Mantenimiento_local_Acciones').val();
        var Aspectos_generales_Otros_Deficiencias=$('#Aspectos_generales_Otros_Deficiencias').val();
        var Aspectos_generales_Otros_Acciones=$('#Aspectos_generales_Otros_Acciones').val();
        var subrasarse_Aspectos_generales_Deficiencias=$('#subrasarse_Aspectos_generales_Deficiencias').val();
        var subrasarse_Aspectos_generales_Acciones=$('#subrasarse_Aspectos_generales_Acciones').val();

        var Aspectos_generales_ALQUILADO=$('#Aspectos_generales_ALQUILADO').val();
        var Aspectos_generales_ALQUILADO1=$('#Aspectos_generales_ALQUILADO1').val();
        var Aspectos_generales_ALQUILADO2=$('#Aspectos_generales_ALQUILADO2').val();

        var Aspectos_generales_CEDIDO=$('#Aspectos_generales_ALQUILADO').val();
        var Aspectos_generales_CEDIDO1=$('#Aspectos_generales_ALQUILADO1').val();
        var Aspectos_generales_CEDIDO2=$('#Aspectos_generales_CEDIDO2').val();
        //fin aspectos generales

        var servicio_judiciales_SI_1=$('#servicio_judiciales_SI_1').val();
        var servicio_judiciales_NO_1=$('#servicio_judiciales_NO_1').val();
        var servicio_judiciales_Observaciones_1=$('#servicio_judiciales_Observaciones_1').val();
        var servicio_judiciales_SI_2=$('#servicio_judiciales_SI_2').val();
        var servicio_judiciales_NO_2=$('#servicio_judiciales_NO_2').val();
        var servicio_judiciales_Observaciones_2=$('#servicio_judiciales_Observaciones_2').val();
        var servicio_judiciales_SI_3=$('#servicio_judiciales_SI_3').val();
        var servicio_judiciales_NO_3=$('#servicio_judiciales_NO_3').val();
        var servicio_judiciales_Observaciones_3=$('#Aspectos_generales_Otros_Deficiencias').val();
        var servicio_judiciales_SI_4=$('#servicio_judiciales_SI_4').val();
        var servicio_judiciales_NO_4=$('#servicio_judiciales_NO_4').val();
        var servicio_judiciales_Observaciones_4=$('#servicio_judiciales_Observaciones_4').val();


        var servicio_judiciales_respuesta_negativa=$('#servicio_judiciales_respuesta_negativa').val();
        var servicio_judiciales_acciones1=$('#servicio_judiciales_acciones1').val();
        var servicio_judiciales_acciones2=$('#servicio_judiciales_acciones2').val();
        var servicio_judiciales_acciones3=$('#servicio_judiciales_acciones3').val();
        var servicio_judiciales_acciones4=$('#servicio_judiciales_acciones4').val();
        var servicio_judiciales_acciones5=$('#servicio_judiciales_acciones5').val();

        //fin de servicios judiciales
        //fin auxilio general

        var auxilio_judicial_SI_1=$('#auxilio_judicial_SI_1').val();
        var auxilio_judicial_NO_1=$('#auxilio_judicial_NO_1').val();
        var auxilio_judicial_Observacaciones=$('#auxilio_judicial_Observacaciones_').val();
        var auxilio_judicial_SI_1=$('#auxilio_judicial_SI_1').val();
        var auxilio_judicial_SI_2_2=$('#auxilio_judicial_SI_2_2').val();
        var auxilio_judicial_NO_2_1=$('#auxilio_judicial_NO_2_1').val();
        var auxilio_judicial_NO_2_2=$('#auxilio_judicial_NO_2_2').val();
        var auxilio_judicial_Observaciones_2_1=$('#auxilio_judicial_Observaciones_2_1').val();
        var auxilio_judicial_Observaciones_2_2=$('#auxilio_judicial_Observaciones_2_2').val();
        var auxilio_judicial_SI_3=$('#auxilio_judicial_SI_3').val();
        var auxilio_judicial_NO_3=$('#auxilio_judicial_NO_3').val();
        var auxilio_judicial_Observaciones_3=$('#auxilio_judicial_Observaciones_3').val();
        var auxilio_judicial_SI_4=$('#auxilio_judicial_SI_4').val();
        var auxilio_judicial_NO_4=$('#auxilio_judicial_NO_4').val();
        var auxilio_judicial_Observaciones_4=$('#auxilio_judicial_Observaciones_4').val();
        var auxilio_judicial_SI_5=$('#auxilio_judicial_SI_5').val();
        var auxilio_judicial_NO_5=$('#auxilio_judicial_NO_5').val();
        var auxilio_judicial_Observaciones_5=$('#auxilio_judicial_Observaciones_5').val();
        var auxilio_judicial_SI_6=$('#auxilio_judicial_SI_6').val();
        var auxilio_judicial_NO_6=$('#auxilio_judicial_NO_6').val();
        var auxilio_judicial_Observaciones_6=$('#auxilio_judicial_Observaciones_6').val();
        var auxilio_judicial_Acciones_1=$('#auxilio_judicial_Acciones_1').val();
        var auxilio_judicial_Acciones_2=$('#auxilio_judicial_Acciones_2').val();
        var auxilio_judicial_Acciones_3=$('#auxilio_judicial_Acciones_3').val();



        if (
            Computadoras_informaticos_Deficiencias==='' ||
            Computadoras_informaticos__Acciones==='' ||
            Impresoras_informaticos_Deficiencias==='' ||
            Impresoras_informaticos_Acciones===''||
            Fax_Informaticos_Deficiencias===''||
            Fax_informaticos_Acciones===''||
         Mantenimiento_equipos_Informaticos_Deficiencias===''||
         Mantenimiento_equipos_Informaticos_Acciones===''||
         UPS_Informaticos_Deficiencias===''||
         UPS_Informaticos_Acciones===''||
         supresor_picos_Informaticos_Deficiencias===''||
         supresor_picos_Informaticos_Acciones===''||
         Correo_Informaticos_Deficiencias===''||
          Correo_Informaticos_Acciones===''||
         sistemas_Informaticos_Deficiencias===''||
         sistemas_Informaticos_Acciones===''||
         Redes_Informáticos_Informaticos_Deficiencias===''||
         Redes_Informáticos_Informaticos_Acciones===''||
         Otros_Informaticos_Deficiencias===''||
         Otros_Informaticos_Acciones===''||
         subrasarse_Informaticos_Deficiencias===''||
         subrasarse_Informaticos_Acciones===''||
            //aspectos informatiocs
            Aspectos_seguridad_detectorM_Deficiencias===''||
         Aspectos_seguridad_detectorM_Acciones===''||
         Aspectos_seguridad_Extintores_Deficiencias===''||
         Aspectos_seguridad_Extintores_Acciones===''||
         Aspectos_seguridad_Mangueras_Deficiencias===''||
         Aspectos_seguridad_Mangueras_Acciones===''||
         Aspectos_seguridad_Otros_Deficiencias===''||
         Aspectos_seguridad_Otros_Acciones===''||
         subrasarse_Aspectos_seguridad_Deficiencias===''||
         subrasarse_Aspectos_seguridad_Acciones===''||
            //aspectos seguridad



            Aspectos_generales_Estructuras_Deficiencias===''||
         Aspectos_generales_Estructuras_Acciones===''||
         Aspectos_generales_Puertas_Deficiencias===''||
         Aspectos_generales_Puertas_Acciones===''||
         Aspectos_generales_Ventanas_Deficiencias===''||
         Aspectos_generales_Ventanas_Acciones===''||
         Aspectos_generales_Pisos_Deficiencias===''||
         Aspectos_generales_Pisos_Acciones===''||
         Aspectos_generales_Pintura_Deficiencias===''||
         Aspectos_generales_Pintura_Acciones===''||
         Aspectos_generales_Instalaciones_Sanitarias_Deficiencias===''||
         Aspectos_generales_Instalaciones_Sanitarias_Acciones===''||
         Aspectos_generales_Instalaciones_Eléctricas_Deficiencias===''||
         Aspectos_generales_Instalaciones_Eléctricas_Acciones===''||
         Aspectos_generales_brinda_Seguridad_Deficiencias===''||
         Aspectos_generales_brinda_Seguridad_Acciones===''||
         Aspectos_generales_Mantenimiento_local_Deficiencias===''||
         Aspectos_generales_Mantenimiento_local_Acciones===''||
         Aspectos_generales_Otros_Deficiencias===''||
         Aspectos_generales_Otros_Acciones===''||
         subrasarse_Aspectos_generales_Deficiencias===''||
         subrasarse_Aspectos_generales_Acciones===''||
         Aspectos_generales_ALQUILADO===''||
         Aspectos_generales_ALQUILADO1===''||
         Aspectos_generales_ALQUILADO2===''||

         Aspectos_generales_CEDIDO===''||
         Aspectos_generales_CEDIDO1===''||
         Aspectos_generales_CEDIDO2==='' ||

        //fin de aspectos generales
            servicio_judiciales_SI_1==='' ||
         servicio_judiciales_NO_1==='' ||
         servicio_judiciales_Observaciones_1==='' ||
         servicio_judiciales_SI_2==='' ||
         servicio_judiciales_NO_2==='' ||
         servicio_judiciales_Observaciones_2==='' ||
         servicio_judiciales_SI_3==='' ||
         servicio_judiciales_NO_3==='' ||
         servicio_judiciales_Observaciones_3==='' ||
         servicio_judiciales_SI_4==='' ||
         servicio_judiciales_NO_4==='' ||
         servicio_judiciales_Observaciones_4==='' ||


         servicio_judiciales_respuesta_negativa==='' ||
         servicio_judiciales_acciones1==='' ||
         servicio_judiciales_acciones2==='' ||
         servicio_judiciales_acciones3==='' ||
         servicio_judiciales_acciones4==='' ||
         servicio_judiciales_acciones5==='' ||

            //FIN serviicos generales
            auxilio_judicial_SI_1===''||
             auxilio_judicial_NO_1===''||
         auxilio_judicial_Observacaciones===''||
         auxilio_judicial_SI_1===''||
         auxilio_judicial_SI_2_2===''||
         auxilio_judicial_NO_2_1===''||
         auxilio_judicial_NO_2_2===''||
         auxilio_judicial_Observaciones_2_1===''||
         auxilio_judicial_Observaciones_2_2===''||
         auxilio_judicial_SI_3===''||
         auxilio_judicial_NO_3===''||
         auxilio_judicial_Observaciones_3===''||
         auxilio_judicial_SI_4===''||
         auxilio_judicial_NO_4===''||
         auxilio_judicial_Observaciones_4===''||
         auxilio_judicial_SI_5===''||
         auxilio_judicial_NO_5===''||
         auxilio_judicial_Observaciones_5===''||
         auxilio_judicial_SI_6===''||
         auxilio_judicial_NO_6===''||
         auxilio_judicial_Observaciones_6===''||
         auxilio_judicial_Acciones_1===''||
         auxilio_judicial_Acciones_2===''||
         auxilio_judicial_Acciones_3===''







    )

        {
            var Computadoras_informaticos_Deficiencias=0, Computadoras_informaticos__Acciones=0, Impresoras_informaticos_Deficiencias=0,
            Impresoras_informaticos_Acciones=0, Fax_Informaticos_Deficiencias=0, Fax_informaticos_Acciones=0,
            Mantenimiento_equipos_Informaticos_Deficiencias=0, Mantenimiento_equipos_Informaticos_Acciones=0,
            UPS_Informaticos_Deficiencias=0, UPS_Informaticos_Acciones=0, supresor_picos_Informaticos_Deficiencias=0,
            supresor_picos_Informaticos_Acciones=0, Correo_Informaticos_Deficiencias=0, Correo_Informaticos_Acciones=0,
            sistemas_Informaticos_Deficiencias=0, sistemas_Informaticos_Acciones=0, Redes_Informáticos_Informaticos_Deficiencias=0,
            Redes_Informáticos_Informaticos_Acciones=0, Otros_Informaticos_Deficiencias=0, Otros_Informaticos_Acciones=0,
            subrasarse_Informaticos_Deficiencias=0, subrasarse_Informaticos_Acciones=0,
               //fin aspectos sguridad
                Aspectos_seguridad_detectorM_Deficiencias=0,
                Aspectos_seguridad_detectorM_Acciones=0,
        Aspectos_seguridad_Extintores_Deficiencias=0,
        Aspectos_seguridad_Extintores_Acciones=0,
        Aspectos_seguridad_Mangueras_Deficiencias=0,
        Aspectos_seguridad_Mangueras_Acciones=0,
        Aspectos_seguridad_Otros_Deficiencias=0,
        Aspectos_seguridad_Otros_Acciones=0,
        subrasarse_Aspectos_seguridad_Deficiencias=0,
        subrasarse_Aspectos_seguridad_Acciones=0,
                //fin aspectos de seguridad


                Aspectos_generales_Estructuras_Deficiencias=0,
        Aspectos_generales_Estructuras_Acciones=0,
        Aspectos_generales_Puertas_Deficiencias=0,
        Aspectos_generales_Puertas_Acciones=0,
        Aspectos_generales_Ventanas_Deficiencias=0,
        Aspectos_generales_Ventanas_Acciones=0,
        Aspectos_generales_Pisos_Deficiencias=0,
        Aspectos_generales_Pisos_Acciones=0,
        Aspectos_generales_Pintura_Deficiencias=0,
        Aspectos_generales_Pintura_Acciones=0,
        Aspectos_generales_Instalaciones_Sanitarias_Deficiencias=0,
        Aspectos_generales_Instalaciones_Sanitarias_Acciones=0,
        Aspectos_generales_Instalaciones_Eléctricas_Deficiencias=0,
        Aspectos_generales_Instalaciones_Eléctricas_Acciones=0,
        Aspectos_generales_brinda_Seguridad_Deficiencias=0,
        Aspectos_generales_brinda_Seguridad_Acciones=0,
        Aspectos_generales_Mantenimiento_local_Deficiencias=0,
        Aspectos_generales_Mantenimiento_local_Acciones=0,
        Aspectos_generales_Otros_Deficiencias=0,
        Aspectos_generales_Otros_Acciones=0,
        subrasarse_Aspectos_generales_Deficiencias=0,
        subrasarse_Aspectos_generales_Acciones=0,
        Aspectos_generales_ALQUILADO=0,
        Aspectos_generales_ALQUILADO1=0,
        Aspectos_generales_ALQUILADO2=0,

        Aspectos_generales_CEDIDO=0,
        Aspectos_generales_CEDIDO1=0,
        Aspectos_generales_CEDIDO2=0,
                //fin aspectos generales
                servicio_judiciales_SI_1=0,
        servicio_judiciales_NO_1=0,
        servicio_judiciales_Observaciones_1=0,
        servicio_judiciales_SI_2=0,
        servicio_judiciales_NO_2=0,
        servicio_judiciales_Observaciones_2=0,
        servicio_judiciales_SI_3=0,
        servicio_judiciales_NO_3=0,
        servicio_judiciales_Observaciones_3=0,
        servicio_judiciales_SI_4=0,
        servicio_judiciales_NO_4=0,
        servicio_judiciales_Observaciones_4=0,


        servicio_judiciales_respuesta_negativa=0,
        servicio_judiciales_acciones1=0,
        servicio_judiciales_acciones2=0,
        servicio_judiciales_acciones3=0,
        servicio_judiciales_acciones4=0,
        servicio_judiciales_acciones5=0,
//FIN ASPECTOS GENERALES


                auxilio_judicial_SI_1=0,
        auxilio_judicial_NO_1=0,
        auxilio_judicial_Observacaciones=0,
        auxilio_judicial_SI_1=0,
        auxilio_judicial_SI_2_2=0,
        auxilio_judicial_NO_2_1=0,
        auxilio_judicial_NO_2_2=0,
        auxilio_judicial_Observaciones_2_1=0,
        auxilio_judicial_Observaciones_2_2=0,
        auxilio_judicial_SI_3=0,
        auxilio_judicial_NO_3=0,
        auxilio_judicial_Observaciones_3=0,
        auxilio_judicial_SI_4=0,
        auxilio_judicial_NO_4=0,
        auxilio_judicial_Observaciones_4=0,
        auxilio_judicial_SI_5=0,
        auxilio_judicial_NO_5=0,
        auxilio_judicial_Observaciones_5=0,
        auxilio_judicial_SI_6=0,
        auxilio_judicial_NO_6=0,
        auxilio_judicial_Observaciones_6=0,
        auxilio_judicial_Acciones_1=0,
        auxilio_judicial_Acciones_2=0,
        auxilio_judicial_Acciones_3=0,
















                Computadoras_informaticos_Deficiencias=validacion('Computadoras_informaticos_Deficiencias');
                Computadoras_informaticos__Acciones=validacion('Computadoras_informaticos__Acciones');
                Impresoras_informaticos_Deficiencias=validacion('Impresoras_informaticos_Deficiencias');
                Impresoras_informaticos_Acciones=validacion('Impresoras_informaticos_Acciones');
                Fax_Informaticos_Deficiencias=validacion('Fax_Informaticos_Deficiencias');
                Fax_informaticos_Acciones=validacion('Fax_informaticos_Acciones');
                Mantenimiento_equipos_Informaticos_Deficiencias=validacion('Mantenimiento_equipos_Informaticos_Deficiencias');
                Mantenimiento_equipos_Informaticos_Acciones=validacion('Mantenimiento_equipos_Informaticos_Acciones');
                UPS_Informaticos_Deficiencias=validacion('UPS_Informaticos_Deficiencias');
                UPS_Informaticos_Acciones=validacion('UPS_Informaticos_Acciones');
                supresor_picos_Informaticos_Deficiencias=validacion('supresor_picos_Informaticos_Deficiencias');
                supresor_picos_Informaticos_Acciones=validacion('supresor_picos_Informaticos_Acciones');
                Correo_Informaticos_Deficiencias=validacion('supresor_picos_Informaticos_Acciones');
                Correo_Informaticos_Acciones=validacion('Correo_Informaticos_Acciones');
                sistemas_Informaticos_Deficiencias=validacion('sistemas_Informaticos_Deficiencias');
                sistemas_Informaticos_Acciones=validacion('sistemas_Informaticos_Acciones');
                Redes_Informáticos_Informaticos_Deficiencias=validacion('Redes_Informáticos_Informaticos_Deficiencias');
                Redes_Informáticos_Informaticos_Acciones=validacion('Redes_Informáticos_Informaticos_Acciones');
                Otros_Informaticos_Deficiencias=validacion('Otros_Informaticos_Deficiencias');
                Otros_Informaticos_Acciones=validacion('Otros_Informaticos_Acciones');
                subrasarse_Informaticos_Deficiencias=validacion('subrasarse_Informaticos_Deficiencias');
                subrasarse_Informaticos_Acciones=validacion('subrasarse_Informaticos_Acciones');
                //enpiesa otro metodo de validacion

                Aspectos_seguridad_detectorM_Deficiencias=validaciones('Aspectos_seguridad_detectorM_Deficiencias');
                Aspectos_seguridad_detectorM_Acciones=validaciones('Aspectos_seguridad_detectorM_Acciones');
                Aspectos_seguridad_Extintores_Deficiencias=validaciones('Aspectos_seguridad_Extintores_Deficiencias');
                Aspectos_seguridad_Extintores_Acciones=validaciones('Aspectos_seguridad_Extintores_Acciones');
                Aspectos_seguridad_Mangueras_Deficiencias=validaciones('Aspectos_seguridad_Mangueras_Deficiencias');
                Aspectos_seguridad_Mangueras_Acciones=validaciones('Aspectos_seguridad_Mangueras_Acciones');
                Aspectos_seguridad_Otros_Deficiencias=validaciones('Aspectos_seguridad_Otros_Deficiencias');
                Aspectos_seguridad_Otros_Acciones=validaciones('Aspectos_seguridad_Otros_Acciones');
                subrasarse_Aspectos_seguridad_Deficiencias=validaciones('subrasarse_Aspectos_seguridad_Deficiencias');
                subrasarse_Aspectos_seguridad_Acciones=validaciones('subrasarse_Aspectos_seguridad_Acciones');

                //fin aspectos de seguridad

            Aspectos_generales_Estructuras_Deficiencias=validaciones('Aspectos_generales_Estructuras_Deficiencias');
                Aspectos_generales_Estructuras_Acciones=validaciones('Aspectos_generales_Estructuras_Acciones');
                Aspectos_generales_Puertas_Deficiencias=validaciones('Aspectos_generales_Puertas_Deficiencias');
                Aspectos_generales_Puertas_Acciones=validaciones('Aspectos_generales_Puertas_Acciones');
                Aspectos_generales_Ventanas_Deficiencias=validaciones('Aspectos_generales_Ventanas_Deficiencias');
                Aspectos_generales_Ventanas_Acciones=validaciones('Aspectos_generales_Ventanas_Acciones');
                Aspectos_generales_Pisos_Deficiencias=validaciones('Aspectos_generales_Pisos_Deficiencias');
                Aspectos_generales_Pisos_Acciones=validaciones('Aspectos_generales_Pisos_Acciones');
                Aspectos_generales_Pintura_Deficiencias=validaciones('Aspectos_generales_Pintura_Deficiencias');
                Aspectos_generales_Pintura_Acciones=validaciones('Aspectos_generales_Pintura_Acciones');
                Aspectos_generales_Instalaciones_Sanitarias_Deficiencias=validaciones('Aspectos_generales_Instalaciones_Sanitarias_Deficiencias');
                Aspectos_generales_Instalaciones_Sanitarias_Acciones=validaciones('Aspectos_generales_Instalaciones_Sanitarias_Acciones');
                Aspectos_generales_Instalaciones_Eléctricas_Deficiencias=validaciones('Aspectos_generales_Instalaciones_Eléctricas_Deficiencias');
                Aspectos_generales_Instalaciones_Eléctricas_Acciones=validaciones('Aspectos_generales_Instalaciones_Eléctricas_Acciones');
                Aspectos_generales_brinda_Seguridad_Deficiencias=validaciones('Aspectos_generales_brinda_Seguridad_Deficiencias');
                Aspectos_generales_brinda_Seguridad_Acciones=validaciones('Aspectos_generales_brinda_Seguridad_Acciones');
                Aspectos_generales_Mantenimiento_local_Deficiencias=validaciones('Aspectos_generales_Mantenimiento_local_Deficiencias');
                Aspectos_generales_Mantenimiento_local_Acciones=validaciones('Aspectos_generales_Mantenimiento_local_Acciones');
                Aspectos_generales_Otros_Deficiencias=validaciones('Aspectos_generales_Otros_Deficiencias');
                Aspectos_generales_Otros_Acciones=validaciones('Aspectos_generales_Otros_Acciones');
                subrasarse_Aspectos_generales_Deficiencias=validaciones('subrasarse_Aspectos_generales_Deficiencias');
                subrasarse_Aspectos_generales_Acciones=validaciones('subrasarse_Aspectos_generales_Acciones');
                Aspectos_generales_ALQUILADO=validaciones('Aspectos_generales_ALQUILADO');
                Aspectos_generales_ALQUILADO1=validaciones('Aspectos_generales_ALQUILADO1');
                Aspectos_generales_ALQUILADO2=validaciones('Aspectos_generales_ALQUILADO2');

                Aspectos_generales_CEDIDO=validaciones('Aspectos_generales_CEDIDO');
                Aspectos_generales_CEDIDO1=validaciones('Aspectos_generales_CEDIDO1');
                Aspectos_generales_CEDIDO2=validaciones('Aspectos_generales_CEDIDO2');
                //fin aspectos generales

            servicio_judiciales_SI_1=validaciones('servicio_judiciales_SI_1');
                servicio_judiciales_NO_1=validaciones('servicio_judiciales_NO_1');
                servicio_judiciales_Observaciones_1=validaciones('servicio_judiciales_Observaciones_1');
                servicio_judiciales_SI_2=validaciones('servicio_judiciales_SI_2');
                servicio_judiciales_NO_2=validaciones('servicio_judiciales_NO_2');
                servicio_judiciales_Observaciones_2=validaciones('servicio_judiciales_Observaciones_2');
                servicio_judiciales_SI_3=validaciones('servicio_judiciales_SI_3');
                servicio_judiciales_NO_3=validaciones('servicio_judiciales_NO_3'),
                servicio_judiciales_Observaciones_3=validaciones('servicio_judiciales_Observaciones_3');
                servicio_judiciales_SI_4=validaciones('servicio_judiciales_SI_4');
                servicio_judiciales_NO_4=validaciones('servicio_judiciales_NO_4');
                servicio_judiciales_Observaciones_4=validaciones('servicio_judiciales_Observaciones_4');


                servicio_judiciales_respuesta_negativa=validaciones('servicio_judiciales_respuesta_negativa');
                servicio_judiciales_acciones1=validaciones('servicio_judiciales_acciones1');
                servicio_judiciales_acciones2=validaciones('servicio_judiciales_acciones2');
                servicio_judiciales_acciones3=validaciones('servicio_judiciales_acciones3');
                servicio_judiciales_acciones4=validaciones('servicio_judiciales_acciones4');
                servicio_judiciales_acciones5=validaciones('');
       //fin servicios finales

            auxilio_judicial_SI_1=validaciones('auxilio_judicial_SI_1');
                auxilio_judicial_NO_1=validaciones('auxilio_judicial_NO_1');
                auxilio_judicial_Observacaciones=validaciones('auxilio_judicial_Observacaciones');
                auxilio_judicial_SI_1=validaciones('auxilio_judicial_SI_1');
                auxilio_judicial_SI_2_2=validaciones('auxilio_judicial_SI_2_2');
                auxilio_judicial_NO_2_1=validaciones('auxilio_judicial_NO_2_1');
                auxilio_judicial_NO_2_2=validaciones('auxilio_judicial_NO_2_2');
                auxilio_judicial_Observaciones_2_1=validaciones('auxilio_judicial_Observaciones_2_1');
                auxilio_judicial_Observaciones_2_2=validaciones('auxilio_judicial_Observaciones_2_2');
                auxilio_judicial_SI_3=validaciones('auxilio_judicial_SI_3');
                auxilio_judicial_NO_3=validaciones('auxilio_judicial_NO_3');
                auxilio_judicial_Observaciones_3=validaciones('auxilio_judicial_Observaciones_3');
                auxilio_judicial_SI_4=validaciones('auxilio_judicial_SI_4');
                auxilio_judicial_NO_4=validaciones('auxilio_judicial_NO_4');
                auxilio_judicial_Observaciones_4=validaciones('auxilio_judicial_Observaciones_4');
                auxilio_judicial_SI_5=validaciones('auxilio_judicial_SI_5');
                auxilio_judicial_NO_5=validaciones('auxilio_judicial_NO_5');
                auxilio_judicial_Observaciones_5=validaciones('auxilio_judicial_Observaciones_5')
                auxilio_judicial_SI_6=validaciones('auxilio_judicial_SI_6');
                auxilio_judicial_NO_6=validaciones('auxilio_judicial_NO_6');
                auxilio_judicial_Observaciones_6=validaciones('auxilio_judicial_Observaciones_6');
                auxilio_judicial_Acciones_1=validaciones('auxilio_judicial_Acciones_1');
                auxilio_judicial_Acciones_2=validaciones('auxilio_judicial_Acciones_2');
                auxilio_judicial_Acciones_3=validaciones('auxilio_judicial_Acciones_3');





            if (

                Computadoras_informaticos_Deficiencias===false ||
                Computadoras_informaticos__Acciones===false||
                Impresoras_informaticos_Deficiencias===false ||
                Impresoras_informaticos_Acciones===false||
                Fax_Informaticos_Deficiencias===false||
                Fax_informaticos_Acciones===false||
                Mantenimiento_equipos_Informaticos_Deficiencias===false||
                Mantenimiento_equipos_Informaticos_Acciones===false||
                UPS_Informaticos_Deficiencias===false||
                UPS_Informaticos_Acciones===false||
                supresor_picos_Informaticos_Deficiencias===false||
                supresor_picos_Informaticos_Acciones===false||
                Correo_Informaticos_Deficiencias===false||
                Correo_Informaticos_Acciones===false||
                sistemas_Informaticos_Deficiencias===false||
                sistemas_Informaticos_Acciones===false||
                Redes_Informáticos_Informaticos_Deficiencias===false||
                Redes_Informáticos_Informaticos_Acciones===false||
                Otros_Informaticos_Deficiencias===false||
                Otros_Informaticos_Acciones===false||
                subrasarse_Informaticos_Deficiencias===false||
                subrasarse_Informaticos_Acciones===false  ||

                //fin aspectos informaticos

                Aspectos_seguridad_detectorM_Deficiencias===false||
                Aspectos_seguridad_detectorM_Acciones===false||
                Aspectos_seguridad_Extintores_Deficiencias===false||
                Aspectos_seguridad_Extintores_Acciones===false||
                Aspectos_seguridad_Mangueras_Deficiencias===false||
                Aspectos_seguridad_Mangueras_Acciones===false||
                Aspectos_seguridad_Otros_Deficiencias===false||
                Aspectos_seguridad_Otros_Acciones===false||
                subrasarse_Aspectos_seguridad_Deficiencias===false||
                subrasarse_Aspectos_seguridad_Acciones===false ||

                //aspectos de seguridad

                Aspectos_generales_Estructuras_Deficiencias===false||
                Aspectos_generales_Estructuras_Acciones===false||
                Aspectos_generales_Puertas_Deficiencias===false||
                Aspectos_generales_Puertas_Acciones===false||
                Aspectos_generales_Ventanas_Deficiencias===false||
                Aspectos_generales_Ventanas_Acciones===false||
                Aspectos_generales_Pisos_Deficiencias===false||
                Aspectos_generales_Pisos_Acciones===false||
                Aspectos_generales_Pintura_Deficiencias===false||
                Aspectos_generales_Pintura_Acciones===false||
                Aspectos_generales_Instalaciones_Sanitarias_Deficiencias===false||
                Aspectos_generales_Instalaciones_Sanitarias_Acciones===false||
                Aspectos_generales_Instalaciones_Eléctricas_Deficiencias===false||
                Aspectos_generales_Instalaciones_Eléctricas_Acciones===false||
                Aspectos_generales_brinda_Seguridad_Deficiencias===false||
                Aspectos_generales_brinda_Seguridad_Acciones===false||
                Aspectos_generales_Mantenimiento_local_Deficiencias===false||
                Aspectos_generales_Mantenimiento_local_Acciones===false||
                Aspectos_generales_Otros_Deficiencias===false||
                Aspectos_generales_Otros_Acciones===false||
                subrasarse_Aspectos_generales_Deficiencias===false||
                subrasarse_Aspectos_generales_Acciones===false||
                Aspectos_generales_ALQUILADO===false||
                Aspectos_generales_ALQUILADO1===false||
                Aspectos_generales_ALQUILADO2===false||

                Aspectos_generales_CEDIDO===false||
                Aspectos_generales_CEDIDO1===false||
                Aspectos_generales_CEDIDO2===false ||

                //fin aspectos generales

                servicio_judiciales_SI_1===false||
                servicio_judiciales_NO_1===false ||
                servicio_judiciales_Observaciones_1===false||
                servicio_judiciales_SI_2===false ||
                servicio_judiciales_NO_2===false ||
                servicio_judiciales_Observaciones_2===false ||
                servicio_judiciales_SI_3===false ||
                servicio_judiciales_NO_3===false ||
                servicio_judiciales_Observaciones_3===false ||
                servicio_judiciales_SI_4===false ||
                servicio_judiciales_NO_4===false ||
                servicio_judiciales_Observaciones_4===false||


                servicio_judiciales_respuesta_negativa===false ||
                servicio_judiciales_acciones1===false||
                servicio_judiciales_acciones2===false ||
                servicio_judiciales_acciones3===false ||
                servicio_judiciales_acciones4===false ||
                servicio_judiciales_acciones5===false ||

            //FIN servicios generales
                auxilio_judicial_SI_1===false||
                auxilio_judicial_NO_1===false||
                auxilio_judicial_Observacaciones===false||
                auxilio_judicial_SI_1===false||
                auxilio_judicial_SI_2_2===false||
                auxilio_judicial_NO_2_1===false||
                auxilio_judicial_NO_2_2===false||
                auxilio_judicial_Observaciones_2_1===false||
                auxilio_judicial_Observaciones_2_2===false||
                auxilio_judicial_SI_3===false||
                auxilio_judicial_NO_3===false||
                auxilio_judicial_Observaciones_3===false||
                auxilio_judicial_SI_4===false||
                auxilio_judicial_NO_4===false||
                auxilio_judicial_Observaciones_4===false||
                auxilio_judicial_SI_5===false||
                auxilio_judicial_NO_5===false||
                auxilio_judicial_Observaciones_5===false||
                auxilio_judicial_SI_6===false||
                auxilio_judicial_NO_6===false||
                auxilio_judicial_Observaciones_6===false||
                auxilio_judicial_Acciones_1===false||
                auxilio_judicial_Acciones_2===false||
                auxilio_judicial_Acciones_3===false


            ) {
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


    if (campo==='Computadoras_informaticos_Deficiencias'){
        Computadoras_informaticos_Deficiencias = document.getElementById(campo).value;
        if( Computadoras_informaticos_Deficiencias == null || Computadoras_informaticos_Deficiencias.length == 0 || /^\s+$/.test(Computadoras_informaticos_Deficiencias) ) {

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
    if (campo==='Computadoras_informaticos__Acciones'){
        Computadoras_informaticos__Acciones = document.getElementById(campo).value;
        if( Computadoras_informaticos__Acciones == null || Computadoras_informaticos__Acciones.length == 0 || /^\s+$/.test(Computadoras_informaticos__Acciones) ) {

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
    if (campo==='Impresoras_informaticos_Deficiencias'){
        Impresoras_informaticos_Deficiencias = document.getElementById(campo).value;
        if( Impresoras_informaticos_Deficiencias == null || Impresoras_informaticos_Deficiencias.length == 0 || /^\s+$/.test(Impresoras_informaticos_Deficiencias) ) {

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
    if (campo==='Impresoras_informaticos_Acciones'){
        Impresoras_informaticos_Acciones = document.getElementById(campo).value;
        if( Impresoras_informaticos_Acciones == null || Impresoras_informaticos_Acciones.length == 0 || /^\s+$/.test(Impresoras_informaticos_Acciones) ) {

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
    if (campo==='Fax_Informaticos_Deficiencias'){
        Fax_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( Fax_Informaticos_Deficiencias == null || Fax_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(Fax_Informaticos_Deficiencias) ) {

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
    if (campo==='Fax_informaticos_Acciones'){
        Fax_informaticos_Acciones = document.getElementById(campo).value;
        if( Fax_informaticos_Acciones == null || Fax_informaticos_Acciones.length == 0 || /^\s+$/.test(Fax_informaticos_Acciones) ) {

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
    if (campo==='Mantenimiento_equipos_Informaticos_Deficiencias'){
        Mantenimiento_equipos_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( Mantenimiento_equipos_Informaticos_Deficiencias == null || Mantenimiento_equipos_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(Mantenimiento_equipos_Informaticos_Deficiencias) ) {

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
    if (campo==='Mantenimiento_equipos_Informaticos_Acciones'){
        Mantenimiento_equipos_Informaticos_Acciones = document.getElementById(campo).value;
        if( Mantenimiento_equipos_Informaticos_Acciones == null || Mantenimiento_equipos_Informaticos_Acciones.length == 0 || /^\s+$/.test(Mantenimiento_equipos_Informaticos_Acciones) ) {

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
    if (campo==='UPS_Informaticos_Deficiencias'){
        UPS_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( UPS_Informaticos_Deficiencias == null || UPS_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(UPS_Informaticos_Deficiencias) ) {

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
    if (campo==='UPS_Informaticos_Acciones'){
        UPS_Informaticos_Acciones = document.getElementById(campo).value;
        if( UPS_Informaticos_Acciones == null || UPS_Informaticos_Acciones.length == 0 || /^\s+$/.test(UPS_Informaticos_Acciones) ) {

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

    if (campo==='supresor_picos_Informaticos_Deficiencias'){
        supresor_picos_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( supresor_picos_Informaticos_Deficiencias == null || supresor_picos_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(supresor_picos_Informaticos_Deficiencias) ) {

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
    if (campo==='supresor_picos_Informaticos_Acciones'){
        supresor_picos_Informaticos_Acciones = document.getElementById(campo).value;
        if( supresor_picos_Informaticos_Acciones == null || supresor_picos_Informaticos_Acciones.length == 0 || /^\s+$/.test(supresor_picos_Informaticos_Acciones) ) {

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
    if (campo==='Correo_Informaticos_Deficiencias'){
        Correo_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( Correo_Informaticos_Deficiencias == null || Correo_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(Correo_Informaticos_Deficiencias) ) {

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
    if (campo==='Correo_Informaticos_Acciones'){
        Correo_Informaticos_Acciones = document.getElementById(campo).value;
        if( Correo_Informaticos_Acciones == null || Correo_Informaticos_Acciones.length == 0 || /^\s+$/.test(Correo_Informaticos_Acciones) ) {

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

    if (campo==='sistemas_Informaticos_Deficiencias'){
        sistemas_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( sistemas_Informaticos_Deficiencias == null || sistemas_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(sistemas_Informaticos_Deficiencias) ) {

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
    if (campo==='sistemas_Informaticos_Acciones'){
        sistemas_Informaticos_Acciones = document.getElementById(campo).value;
        if( sistemas_Informaticos_Acciones == null || sistemas_Informaticos_Acciones.length == 0 || /^\s+$/.test(sistemas_Informaticos_Acciones) ) {

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
    if (campo==='Redes_Informáticos_Informaticos_Deficiencias'){
        Redes_Informáticos_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( Redes_Informáticos_Informaticos_Deficiencias == null || Redes_Informáticos_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(Redes_Informáticos_Informaticos_Deficiencias) ) {

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
    if (campo==='Redes_Informáticos_Informaticos_Acciones'){
        Redes_Informáticos_Informaticos_Acciones = document.getElementById(campo).value;
        if( Redes_Informáticos_Informaticos_Acciones == null || Redes_Informáticos_Informaticos_Acciones.length == 0 || /^\s+$/.test(Redes_Informáticos_Informaticos_Acciones) ) {

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

    if (campo==='Otros_Informaticos_Deficiencias'){
        Otros_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( Otros_Informaticos_Deficiencias == null || Otros_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(Otros_Informaticos_Deficiencias) ) {

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
    if (campo==='Otros_Informaticos_Acciones'){
        Otros_Informaticos_Acciones = document.getElementById(campo).value;
        if( Otros_Informaticos_Acciones == null || Otros_Informaticos_Acciones.length == 0 || /^\s+$/.test(Otros_Informaticos_Acciones) ) {

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
    if (campo==='subrasarse_Informaticos_Deficiencias'){
        subrasarse_Informaticos_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Informaticos_Deficiencias == null || subrasarse_Informaticos_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Informaticos_Deficiencias) ) {

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
    if (campo==='subrasarse_Informaticos_Acciones'){
        subrasarse_Informaticos_Acciones = document.getElementById(campo).value;
        if( subrasarse_Informaticos_Acciones == null || subrasarse_Informaticos_Acciones.length == 0 || /^\s+$/.test(subrasarse_Informaticos_Acciones) ) {

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

function validaciones(campo) {
    var a=0;
    if (campo==='Aspectos_seguridad_detectorM_Deficiencias'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='Aspectos_seguridad_detectorM_Acciones'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_seguridad_Extintores_Deficiencias'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_seguridad_Extintores_Acciones'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='Aspectos_seguridad_detectorM_Deficiencias'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='Aspectos_seguridad_detectorM_Acciones'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_seguridad_Mangueras_Deficiencias'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_seguridad_Mangueras_Acciones'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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

    if (campo==='Aspectos_seguridad_Otros_Deficiencias'){
        Aspectos_seguridad_Otros_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Deficiencias == null || Aspectos_seguridad_Otros_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Deficiencias) ) {

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
    if (campo==='Aspectos_seguridad_Otros_Acciones'){
        Aspectos_seguridad_Otros_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Acciones == null || Aspectos_seguridad_Otros_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='subrasarse_Aspectos_seguridad_Deficiencias'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='subrasarse_Aspectos_seguridad_Acciones'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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

    //fin aspectos de seguridad
    if (campo==='Aspectos_generales_Estructuras_Deficiencias'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='Aspectos_generales_Estructuras_Acciones'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Puertas_Deficiencias'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Puertas_Acciones'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='Aspectos_generales_Ventanas_Deficiencias'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='Aspectos_generales_Ventanas_Acciones'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Pisos_Deficiencias'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Pisos_Acciones'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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

    if (campo==='Aspectos_generales_Pintura_Deficiencias'){
        Aspectos_seguridad_Otros_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Deficiencias == null || Aspectos_seguridad_Otros_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Deficiencias) ) {

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
    if (campo==='Aspectos_generales_Pintura_Acciones'){
        Aspectos_seguridad_Otros_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Acciones == null || Aspectos_seguridad_Otros_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Instalaciones_Sanitarias_Deficiencias'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Instalaciones_Sanitarias_Acciones'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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

    if (campo==='Aspectos_generales_Instalaciones_Eléctricas_Deficiencias'){
        Aspectos_seguridad_Otros_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Deficiencias == null || Aspectos_seguridad_Otros_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Deficiencias) ) {

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
    if (campo==='Aspectos_generales_Instalaciones_Eléctricas_Acciones'){
        Aspectos_seguridad_Otros_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Acciones == null || Aspectos_seguridad_Otros_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_brinda_Seguridad_Deficiencias'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_brinda_Seguridad_Acciones'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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

    if (campo==='Aspectos_generales_Mantenimiento_local_Deficiencias'){
        Aspectos_seguridad_Otros_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Deficiencias == null || Aspectos_seguridad_Otros_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Deficiencias) ) {

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
    if (campo==='Aspectos_generales_Mantenimiento_local_Acciones'){
        Aspectos_seguridad_Otros_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Acciones == null || Aspectos_seguridad_Otros_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Otros_Deficiencias'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_Otros_Acciones'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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


    if (campo==='subrasarse_Aspectos_generales_Deficiencias'){
        Aspectos_seguridad_Otros_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Deficiencias == null || Aspectos_seguridad_Otros_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Deficiencias) ) {

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
    if (campo==='subrasarse_Aspectos_generales_Acciones'){
        Aspectos_seguridad_Otros_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Otros_Acciones == null || Aspectos_seguridad_Otros_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Otros_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_ALQUILADO'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_ALQUILADO1'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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
    if (campo==='Aspectos_generales_ALQUILADO2'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_CEDIDO'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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
    if (campo==='Aspectos_generales_CEDIDO1'){
        subrasarse_Aspectos_seguridad_Deficiencias = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Deficiencias == null || subrasarse_Aspectos_seguridad_Deficiencias.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='Aspectos_generales_CEDIDO2'){
        subrasarse_Aspectos_seguridad_Acciones = document.getElementById(campo).value;
        if( subrasarse_Aspectos_seguridad_Acciones == null || subrasarse_Aspectos_seguridad_Acciones.length == 0 || /^\s+$/.test(subrasarse_Aspectos_seguridad_Acciones) ) {

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
   //fin aspectos generales
    if (campo==='servicio_judiciales_SI_1'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='servicio_judiciales_NO_1'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_Observaciones_1'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_SI_2'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='servicio_judiciales_NO_2'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='servicio_judiciales_Observaciones_2'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_SI_3'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_NO_3'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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
    if (campo==='servicio_judiciales_Observaciones_3'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='servicio_judiciales_SI_4'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_NO_4'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_Observaciones_4'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='servicio_judiciales_respuesta_negativa'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='servicio_judiciales_acciones1'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_acciones2'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='servicio_judiciales_acciones3'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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

    if (campo==='servicio_judiciales_acciones4'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='servicio_judiciales_acciones5'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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

    //fin auxilio general

    if (campo==='auxilio_judicial_SI_1'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_NO_1'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Observacaciones'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_SI_1'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='auxilio_judicial_SI_2_2'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_NO_2_1'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_NO_2_2'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Observaciones_2_1'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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

    if (campo==='auxilio_judicial_Observaciones_2_2'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_SI_3'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_NO_3'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Observaciones_3'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='auxilio_judicial_SI_4'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_NO_4'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Observaciones_4'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_SI_5'){
        Aspectos_seguridad_Mangueras_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Acciones == null || Aspectos_seguridad_Mangueras_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Acciones) ) {

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

    if (campo==='auxilio_judicial_NO_5'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_SI_6'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_NO_6'){
        Aspectos_seguridad_Extintores_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Deficiencias == null || Aspectos_seguridad_Extintores_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Observaciones_6'){
        Aspectos_seguridad_Extintores_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_Extintores_Acciones == null || Aspectos_seguridad_Extintores_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_Extintores_Acciones) ) {

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
    if (campo==='auxilio_judicial_Acciones_1'){
        Aspectos_seguridad_detectorM_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Deficiencias == null || Aspectos_seguridad_detectorM_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Deficiencias) ) {

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
    if (campo==='auxilio_judicial_Acciones_2'){
        Aspectos_seguridad_detectorM_Acciones = document.getElementById(campo).value;
        if( Aspectos_seguridad_detectorM_Acciones == null || Aspectos_seguridad_detectorM_Acciones.length == 0 || /^\s+$/.test(Aspectos_seguridad_detectorM_Acciones) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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
    if (campo==='auxilio_judicial_Acciones_3'){
        Aspectos_seguridad_Mangueras_Deficiencias = document.getElementById(campo).value;
        if( Aspectos_seguridad_Mangueras_Deficiencias == null || Aspectos_seguridad_Mangueras_Deficiencias.length == 0 || /^\s+$/.test(Aspectos_seguridad_Mangueras_Deficiencias) ) {

            $("#glypcn"+campo).remove();
            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#'+campo).parent().children('span').text("Campo Requerido").show();
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










}
function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();

}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

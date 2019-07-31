<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use SysEncuesta\Administrativa;
use SysEncuesta\Areas_judiciales;
use SysEncuesta\Aspectos_Generales;
use SysEncuesta\Aspectos_informaticos;
use SysEncuesta\Aspectos_logisticos;
use SysEncuesta\Aspectos_seguridad;
use SysEncuesta\Auxilio_Judicial;
use SysEncuesta\Cobranzas_multas;
use SysEncuesta\Cuerpos_Delito;
use SysEncuesta\Mobiliario;
use SysEncuesta\Peritos_judiciales;
use SysEncuesta\Personal;
use SysEncuesta\Recaudacion_judicial;
use SysEncuesta\Servicios_basicos;
use SysEncuesta\Servicios_Judiciales;
use SysEncuesta\Suministro_Materiales;

class EncuestaController extends Controller
{
    public function index(){
        return view('Encuestas.Encuestas');
    }
   public function hola(Request $request){
        $admin=new Administrativa();
        $admin->Presidente_corte=$request->Precidente_corte;
       $admin->Gerente_Administrativo=$request->Gerente_Administrativo;
       $admin->Organo_Juridicial=$request->Org_Judi;
       $admin->Direccion=$request->direccion;
       $admin->Magistrado=$request->Magistrado;
       $admin->Fecha_Programacion=$request->fecha_progra;
       $admin->Fecha_Ejecucion=$request->fecha_ejecu;
       $admin->Usuario_idUsuario=$request->iduser;
       //$admin->save();

      $personal=new Personal();
      $personal->Personal_Total=$request->personal_total;
       $personal->Regi_Trabajadores=$request->DL_728_Trabajador;
       $personal->Regi_Magistrado=$request->DL_276_Magistrado;
       $personal->Regi_Trabajadores_1=$request->DL_1057_Trabajador_1;
       $personal->Regis_Ftocheck=$request->Fotocheck;
       $personal->Obersvaciones=$request->observacion_1_Personal;
       $personal->Observaciones1=$request->observacion_2_Personal;
       $personal->Usuario_idUsuario=$request->iduser;
       //$personal->save();
        return $personal;
        $area_apoyo=new Areas_judiciales();
        $area_apoyo->Mesa_partes_Deficiencias=$request->Mesa_Partes_areas_apoyo_Deficiencias;
        $area_apoyo->Mesa_partes_Accio=$request->Mesa_Partes_areas_apoyo_Acciones;
       $area_apoyo->Archivo_Jurisdicionales_Deficiencias=$request->archivo_areas_apoyo_Deficiencias;
       $area_apoyo->Archivo_Juris_Accio=$request->archivo_areas_apoyo_Acciones;

       $area_apoyo->Notificaciones_Judiciales_Deficiencias=$request->Notificaciones_areas_apoyo_Deficiencias;
       $area_apoyo->Notificaciones_Judiciales_Accio=$request->Notificaciones_areas_apoyo_Acciones;
       $area_apoyo->Publicacion_Edictos_Deficiencias=$request->Publicaciones_areas_apoyo_Deficiencias;
       $area_apoyo->Publicacion_Edictos_Accio=$request->Publicaciones_areas_apoyo_Archivos;

       $area_apoyo->Convenio_Reniec_Deficiencias=$request->Convenio_reniec_areas_apoyo_Deficiencias;
       $area_apoyo->Convenio_Reniec_Accio=$request->Convenio_reniec_areas_apoyo_Acciones;
       $area_apoyo->Requesitos_Deficiencias=$request->Requisitorias_areas_apoyo_Deficiencias;
       $area_apoyo->Requesitos_Accio=$request->Requisitorias_areas_apoyo_Acciones;

       $area_apoyo->Areas_judiciales_Otros_Deficiencias=$request->Otros_areas_apoyo_Deficiencias;
       $area_apoyo->Areas_judiciales_Otros_Accio=$request->Otros_areas_apoyo_Acciones;
       $area_apoyo->Areas_judiciales_Advertencia_Deficiencias=$request->subrasarse_areas_apoyo_Deficiencias;
       $area_apoyo->Areas_judiciales_Advertencia_Accio=$request->subrasarse_areas_apoyo_Acciones;
       $area_apoyo->Usuario_idUsuario=$request->iduser;
       //$area_apoyo->save();

       $aspectos_logisticos=new Aspectos_logisticos();
       $aspectos_logisticos->Servi_Tercer_Mensa_Defi=$request->Mensajería_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Mensa_Acci=$request->Mensajería_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_fotocop_Defi=$request->Fotocopiado_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_fotocop_Acci=$request->Fotocopiado_aspectos_logisticos_Acciones;

       $aspectos_logisticos->Servi_Tercer_linpieza_Defi=$request->Limpieza_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_linpieza_Acci=$request->Limpieza_aspectos_logisticos_Acciones;
       $aspectos_logisticos->Servi_Tercer_Traducc_Defi=$request->Traducciones_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Traducc_Acc=$request->Traducciones_aspectos_logisticos_Archivos;

       $aspectos_logisticos->Servi_Tercer_Publica_Defi=$request->Publicaciones_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Publica_Acc=$request->Publicaciones_aspectos_logisticos_Acciones;
       $aspectos_logisticos->Servi_Tercer_Arrenda_Defi=$request->Arrendamiento_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Arrenda_Acci=$request->Arrendamiento_aspectos_logisticos_Acciones;

       $aspectos_logisticos->Servi_Tercer_Manten_Defi=$request->Mantenimiento_vehiculos_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Manten_Acc=$request->Mantenimiento_vehiculos_aspectos_logisticos_Acciones;
       $aspectos_logisticos->Servi_Tercer_Otros_Defi=$request->Otros_aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Otros_Acc=$request->Otros_aspectos_logisticos_Acciones;

       $aspectos_logisticos->Servi_Tercer_Adverten_Defi=$request->subrasarse_Aspectos_logisticos_Deficiencias;
       $aspectos_logisticos->Servi_Tercer_Adverten_Acci=$request->subrasarse_Aspectos_logisticos_Acciones;
       $aspectos_logisticos->Usuario_idUsuario=$request->iduser;
       //$aspectos_logisticos->save();

       $servicios_basicos=new Servicios_basicos();
       $servicios_basicos->Servi_Basi_Ener_Elec_Defi=$request->Energía_setvicio_bascios_Deficiencias;
       $servicios_basicos->Servi_Basi_Ener_Elec_Acc=$request->Energía_setvicio_bascios_Acciones;
       $servicios_basicos->Servi_Basi_Agua_Defi=$request->Agua_servicio_bascios_Deficiencias;
       $servicios_basicos->Servi_Basi_Agua_Acc=$request->Agua_servicio_bascios_Acciones;

       $servicios_basicos->Servi_Basi_Telefo_Inter_Defi=$request->Telefonía_servicio_bascios_Deficiencias;
       $servicios_basicos->Servi_Basi_Telefo_Inter_Acci=$request->Telefonía_servicio_bascios_Acciones;
       $servicios_basicos->Servi_Basi_Otros_Defi=$request->Otros_servicios_basicos_Deficiencias;
       $servicios_basicos->Servi_Basi_Otros_Acci=$request->Otros_servicios_basicos_Acciones;

       $servicios_basicos->Servi_Basi_Adver_Defi=$request->subrasarse_servicios_basicos_Deficiencias;
       $servicios_basicos->Servi_Basi_Adver_Acci=$request->subrasarse_servicios_basicos_Acciones;
       $servicios_basicos->Usuario_idUsuario=$request->iduser;
       //$servicios_basicos->save();

       $mobi=new Mobiliario();
       $mobi->Mobi_Armarios_Archiva_Defi=$request->Armarios_mobiliario_Deficiencias;
       $mobi->Mobi_Armarios_Archiva_Acci=$request->Armarios_mobiliario_Acciones;
       $mobi->Mobi_Estanteria_Metalica_Defi=$request->Estantería_mobiliario_Deficiencias;
       $mobi->Mobi_Estanteria_Metalica_Acci=$request->Estantería_mobiliario_Acciones;

       $mobi->Mobi_Escritorio_mesas_Defi=$request->Escritorios_mobiliario_Deficiencias;
       $mobi->Mobi_Escritorio_mesas_Acci=$request->Escritorios_mobiliario_Acciones;
       $mobi->Mobi_sillas_sillones_Defi=$request->Sillas_mobiliario_Deficiencias;
       $mobi->Mobi_sillas_sillones_Acci=$request->Sillas_mobiliario_Archivos;

       $mobi->Mobi_Modulos_Defi=$request->Módulos_computadoras_mobiliarios_Deficiencias;
       $mobi->Mobi_Modulos_Acci=$request->Módulos_computadoras_mobiliarios_Acciones;
       $mobi->Mobi_Otros_Defi=$request->otros_mobiliario_Deficiencias;
       $mobi->Mobi_Otros_Acci=$request->otros_mobiliario_Acciones;

       $mobi->Advertencia_Mobiliario_Defi=$request->subrasarse_mobiliarios_Deficiencias;
       $mobi->Advertencia_Mobiliario_Acci=$request->subrasarse_Aspectos_logisticos_Acciones;
       $mobi->Usuario_idUsuario=$request->iduser;
       //$mobi->save();
        $suministo=new Suministro_Materiales();
        $suministo->sumi_Papel_Defi=$request->Papel_suministro_Deficiencias;
        $suministo->sumi_Papel_Acci=$request->Papel_suministro_Acciones;
        $suministo->sumi_Boligrafos_Grapas_Defi=$request->Bolígrafos_suministro_Deficiencias;
        $suministo->sumi_Boligrafos_Grapas_Acci=$request->Bolígrafos_suministro_Acciones;

       $suministo->Sumi_Cinta_Impresora_Defi=$request->Cinta_suministro_Deficiencias;
       $suministo->Sumi_Cinta_Impresora_Acci=$request->Cinta_suministro_Acciones;
       $suministo->Sumi_Caratulas_Defi=$request->Carátulas_suministro_Deficiencias;
       $suministo->Sumi_Caratulas_Acci=$request->Carátulas_suministro_Acciones;

       $suministo->Sumi_Peruano_Defi=$request->Peruano_suministro_Deficiencias;
       $suministo->Sumi_Peruano_Acci=$request->Peruano_suministro_Archivos;
       $suministo->Sumi_Otros_Defi=$request->Otros_suministro_Deficiencias;
       $suministo->Sumi_Otros_Acci=$request->Otros_suministro_Acciones;

       $suministo->Sumi_Advertencia_Defi=$request->subrasarse_suministro_Deficiencias;
       $suministo->Sumi_Advertencia_Acci=$request->subrasarse_suministro_Acciones;
       $suministo->Usuario_idUsuario=$request->iduser;
       //$suministo->save();
     $aspectos_informaticos=new Aspectos_informaticos();

    $aspectos_informaticos->Aspect_Infor_Compu_Defi=$request->Computadoras_informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Compu_Acc=$request->Computadoras_informaticos__Acciones;
    $aspectos_informaticos->Aspect_infor_Impres_Defi=$request->Impresoras_informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_infor_Impres_Acc=$request->Impresoras_informaticos_Acciones;

    $aspectos_informaticos->Aspect_Infor_Fax_Defi=$request->Fax_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Fax_Acc=$request->Fax_informaticos_Acciones;
    $aspectos_informaticos->Aspect_Infor_Mante_Equi_Defi=$request->Mantenimiento_equipos_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Mante_Equi_Acci=$request->Mantenimiento_equipos_Informaticos_Acciones;

    $aspectos_informaticos->Aspect_Infor_Ups_Defi=$request->UPS_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Ups_Acc=$request->UPS_Informaticos_Acciones;
    $aspectos_informaticos->Aspect_Infor_Supresor_Defi=$request->supresor_picos_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Supresor_Acc=$request->supresor_picos_Informaticos_Acciones;

    $aspectos_informaticos->Aspect_Infor_correo_Defi=$request->Correo_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_correo_Acc=$request->Correo_Informaticos_Acciones;
    $aspectos_informaticos->Aspect_Sistemas_Informaticos=$request->sistemas_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Sistemas_Informaticos_Acc=$request->sistemas_Informaticos_Acciones;

    $aspectos_informaticos->Aspect_Redes_Informaticos_Defi=$request->Redes_Informáticos_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Redes_Informaticos_Acc=$request->Redes_Informáticos_Informaticos_Acciones;
    $aspectos_informaticos->Aspect_Infor_Otros_Defi=$request->Otros_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Otros_Acc=$request->Otros_Informaticos_Acciones;

    $aspectos_informaticos->Aspect_Infor_Advert_Defi=$request->subrasarse_Informaticos_Deficiencias;
    $aspectos_informaticos->Aspect_Infor_Advert_Acc=$request->subrasarse_Informaticos_Acciones;
    $aspectos_informaticos->Usuario_idUsuario=$request->iduser;

    //$aspectos_informaticos->save();

    $aspectos_seguridad=new Aspectos_seguridad();
    $aspectos_seguridad->Aspecto_segu_Detectores_metal_Defi=$request->Aspectos_seguridad_detectorM_Deficiencias;
    $aspectos_seguridad->Aspecto_segu_Detectores_metal_Acc=$request->Aspectos_seguridad_detectorM_Acciones;
    $aspectos_seguridad->Aspecto_segu_Extintotores_Defi=$request->Aspectos_seguridad_Extintores_Deficiencias;
    $aspectos_seguridad->Aspecto_segu_Extintotores_Acc=$request->Aspectos_seguridad_Extintores_Acciones;

    $aspectos_seguridad->Aspecto_segu_Mangueras_Defi=$request->Aspectos_seguridad_Mangueras_Deficiencias;
    $aspectos_seguridad->Aspecto_segu_Mangueras_Acc=$request->Aspectos_seguridad_Mangueras_Acciones;
    $aspectos_seguridad->Aspecto_segu_Otros_Defi=$request->Aspectos_seguridad_Otros_Deficiencias;
    $aspectos_seguridad->Aspecto_segu_Otros_Acc=$request->Aspectos_seguridad_Otros_Acciones;

    $aspectos_seguridad->Aspecto_Segu_Advertencia_Defi=$request->subrasarse_Aspectos_seguridad_Deficiencias;
    $aspectos_seguridad->Aspecto_Segu_Advertencia_Acc=$request->subrasarse_Aspectos_seguridad_Acciones;
    $aspectos_seguridad->Usuario_idUsuario=$request->iduser;

       //$aspectos_seguridad->save();
     $aspectos_generales=new Aspectos_Generales();
     $aspectos_generales->Aspec_Gene_Estructuras_Defi=$request->Aspectos_generales_Estructuras_Deficiencias;
     $aspectos_generales->Aspec_Gene_Estructuras_Acc=$request->Aspectos_generales_Estructuras_Acciones;
     $aspectos_generales->Aspec_Gene_Puertas_Defi=$request->Aspectos_generales_Puertas_Deficiencias;
     $aspectos_generales->Aspec_Gene_Puertas_Acc=$request->Aspectos_generales_Puertas_Acciones;

     $aspectos_generales->Aspect_Gene_Ventanas_Defi=$request->Aspectos_generales_Ventanas_Deficiencias;
     $aspectos_generales->Aspect_Gene_Ventanas_Acc=$request->Aspectos_generales_Ventanas_Acciones;
     $aspectos_generales->Aspect_Gene_Pisos_Defi=$request->Aspectos_generales_Pisos_Deficiencias;
     $aspectos_generales->Aspect_Gene_Pisos_Acc=$request->Aspectos_generales_Pisos_Acciones;

     $aspectos_generales->Aspect_Gene_Pintura_Defi=$request->Aspectos_generales_Pintura_Deficiencias;
     $aspectos_generales->Aspect_Gene_Pintura_Acc=$request->Aspectos_generales_Pintura_Acciones;
     $aspectos_generales->Aspect_Instalaciones_sanitarias_Defi=$request->Aspectos_generales_Instalaciones_Sanitarias_Deficiencias;
     $aspectos_generales->Aspect_Instalaciones_sanitarias_Acc=$request->Aspectos_generales_Instalaciones_Sanitarias_Acciones;


     $aspectos_generales->Aspect_Gene_Electricas_Defi=$request->Aspectos_generales_Instalaciones_Eléctricas_Deficiencias;
     $aspectos_generales->Aspect_Gene_Electricas_Acc=$request->Aspectos_generales_Instalaciones_Eléctricas_Acciones;
     $aspectos_generales->Aspect_Gene_Brinsa_Seguridad_Defi=$request->Aspectos_generales_brinda_Seguridad_Deficiencias;
     $aspectos_generales->Aspect_Gene_Brinsa_Seguridad_Acc=$request->Aspectos_generales_brinda_Seguridad_Acciones;

     $aspectos_generales->Aspect_Gene_manteni_local_defi=$request->Aspectos_generales_Mantenimiento_local_Deficiencias;
     $aspectos_generales->Aspect_Gene_manteni_local_Acci=$request->Aspectos_generales_Mantenimiento_local_Acciones;
     $aspectos_generales->Aspect_Gene_Otros_Defi=$request->Aspectos_generales_Instalaciones_Eléctricas_Deficiencias;
     $aspectos_generales->Aspect_Gene_Otros_Acc=$request->Aspectos_generales_Instalaciones_Eléctricas_Acciones;

     $aspectos_generales->Aspect_Gene_Otros_Defi=$request->Aspectos_generales_Instalaciones_Eléctricas_Deficiencias;
     $aspectos_generales->Aspect_Gene_Otros_Acc=$request->Aspectos_generales_Instalaciones_Eléctricas_Acciones;
     $aspectos_generales->Aspect_Gene_Advertencia_Difi=$request->ssubrasarse_Aspectos_generales_Deficiencias;
     $aspectos_generales->Aspect_Gene_Advertencia_Acc=$request->subrasarse_Aspectos_generales_Acciones;

       $aspectos_generales->Aspect_Gene_Alquilado_1=$request->Aspectos_generales_ALQUILADO;
       $aspectos_generales->Aspect_Gene_Alquilado_2=$request->Aspectos_generales_ALQUILADO1;
       $aspectos_generales->Aspect_Gene_Alquilado_3=$request->Aspectos_generales_ALQUILADO2;
       $aspectos_generales->Aspect_Gene_Cedido_1=$request->Aspectos_generales_CEDIDO;
       $aspectos_generales->Aspect_Gene_Cedido_2=$request->Aspectos_generales_CEDIDO1;
       $aspectos_generales->Aspect_Gene_Cedido_3=$request->Aspectos_generales_CEDIDO2;
       $aspectos_generales->Usuario_idUsuario=$request->iduser;
       $aspectos_generales->save();

       $servicios_judiciales=new Servicios_Judiciales();
       $servicios_judiciales->Condicion_uno=$request->servicio_judiciales_SI_1;
       $servicios_judiciales->Condicion_uno=$request->servicio_judiciales_NO_1;
       $servicios_judiciales->Condicion_uno_Observa=$request->servicio_judiciales_Observaciones_1;

       $servicios_judiciales->Condicion_dos=$request->servicio_judiciales_SI_2;
       $servicios_judiciales->Condicion_dos=$request->servicio_judiciales_NO_2;
       $servicios_judiciales->Condicion_dos_Observa=$request->servicio_judiciales_Observaciones_2;

       $servicios_judiciales->Condicion_tres=$request->servicio_judiciales_SI_3;
       $servicios_judiciales->Condicion_tres=$request->servicio_judiciales_NO_3;
       $servicios_judiciales->Condicion_tres_Observa=$request->servicio_judiciales_Observaciones_3;

       $servicios_judiciales->Condicion_cuatro=$request->servicio_judiciales_SI_4;
       $servicios_judiciales->Condicion_cuatro=$request->servicio_judiciales_NO_4;
       $servicios_judiciales->Condicion_cuatro_Observa=$request->servicio_judiciales_Observaciones_4;

       $servicios_judiciales->respuesta_negativa=$request->servicio_judiciales_respuesta_negativa;
       $servicios_judiciales->Acciones_Adoptadas_uno=$request->servicio_judiciales_acciones1;
       $servicios_judiciales->Acciones_Adoptadas_dos=$request->servicio_judiciales_acciones2;
       $servicios_judiciales->Acciones_Adoptadoas_tres=$request->servicio_judiciales_acciones3;
       $servicios_judiciales->Acciones_Adoptadas_cuatro=$request->servicio_judiciales_acciones4;
       $servicios_judiciales->Acciones_Adoptadas_cinco=$request->servicio_judiciales_acciones5;
       $servicios_basicos->Usuario_idUsuario=$request->iduser;

       $servicios_judiciales->save();
       $auxilio_judicial=new Auxilio_Judicial();
       $auxilio_judicial->auxi_Judi_Condici_uno=$request->auxilio_genereal_SI_1;
       $auxilio_judicial->auxi_Judi_Condici_uno=$request->auxilio_genereal_NO_1;
       $auxilio_judicial->auxi_Judi_Condici_uno_Observa=$request->auxilio_genereal_Observacaciones_1;

       $auxilio_judicial->auxi_Judi_Condici_dos=$request->auxilio_genereal_SI_2_1;
       $auxilio_judicial->auxi_Judi_Condici_dos=$request->auxilio_genereal_NO_2_1;
       $auxilio_judicial->auxi_Judi_Condici_dos_Observa=$request->auxilio_genereal_Observaciones_2_1;




       $auxilio_judicial->Condici_dos_uno=$request->auxilio_genereal_SI_2_2;
       $auxilio_judicial->Condici_dos_uno=$request->auxilio_genereal_NO_2_2;
       $auxilio_judicial->auxi_Judi_Condici_dos_uno_Observa=$request->auxilio_genereal_Observaciones_2_2;

       $auxilio_judicial->auxi_Judi_Condici_tres=$request->auxilio_genereal_SI_3;
       $auxilio_judicial->auxi_Judi_Condici_tres=$request->auxilio_genereal_NO_3;
       $auxilio_judicial->auxi_Judi_Condici_tres_Observa=$request->auxilio_genereal_Observaciones_3;

       $auxilio_judicial->auxi_Judi_Condici_cuatro=$request->auxilio_genereal_SI_4;
       $auxilio_judicial->auxi_Judi_Condici_cuatro=$request->auxilio_genereal_NO_4;
       $auxilio_judicial->auxi_Judi_Condici_tres_Observa=$request->auxilio_genereal_Observaciones_4;


       $auxilio_judicial->auxi_Judi_Condici_cinco=$request->auxilio_genereal_SI_5;
       $auxilio_judicial->auxi_Judi_Condici_cinco=$request->auxilio_genereal_NO_5;
       $auxilio_judicial->auxi_Judi_Condici_tres_Observa=$request->auxilio_genereal_Observaciones_5;

       $auxilio_judicial->auxi_Judi_Condici_seis=$request->auxilio_genereal_SI_6;
       $auxilio_judicial->auxi_Judi_Condici_seis=$request->auxilio_genereal_NO_6;
       $auxilio_judicial->auxi_Judi_Condici_tres_Observa=$request->auxilio_genereal_Observaciones_6;

       $auxilio_judicial->auxi_Judi_Acciones_uno=$request->auxilio_genereal_Acciones_1;
       $auxilio_judicial->auxi_Judi_Acciones_dos=$request->auxilio_genereal_Acciones_2;
       $auxilio_judicial->auxi_Judi_Acciones_tres=$request->auxilio_genereal_Acciones_3;
       $auxilio_judicial->Usuario_idUsuario=$request->iduser;

       $auxilio_judicial->save();

       $peritos_judiciales= new Peritos_judiciales();
       $peritos_judiciales->Peritos_Condicion_uno=$request->Peritos_judiciales_SI_1;
       $peritos_judiciales->Peritos_Condicion_uno=$request->Peritos_judiciales_NO_1;
       $peritos_judiciales->Peritos_Condicion_uno_observa=$request->Peritos_judiciales_Obserbaciones_1;


       $peritos_judiciales->Peritos_Condicion_dos=$request->Peritos_judiciales_SI_2_1;
       $peritos_judiciales->Peritos_Condicion_dos=$request->Peritos_judiciales_NO_2_1;
       $peritos_judiciales->Peritos_Condicion_dos_Observa=$request->Peritos_judiciales_Obserbaciones_2_1;

       $peritos_judiciales->Peritos_Condicion_dos_uno=$request->Peritos_judiciales_SI_2_2;
       $peritos_judiciales->Peritos_Condicion_dos_uno=$request->Peritos_judiciales_NO_2_2;
       $peritos_judiciales->Peritos_Condicion_dos_uno_Observa=$request->Peritos_judiciales_Obserbaciones_2_2;


       $peritos_judiciales->Peritos_Condicion_tres=$request->Peritos_judiciales_SI_3;
       $peritos_judiciales->Peritos_Condicion_tres=$request->Peritos_judiciales_NO_3;
       $peritos_judiciales->Peritos_Condicion_tres_Observa=$request->Peritos_judiciales_Obserbaciones_3;


       $peritos_judiciales->Peritos_Condicion_cuatro=$request->Peritos_judiciales_SI_4;
       $peritos_judiciales->Peritos_Condicion_cuatro=$request->Peritos_judiciales_NO_4;
       $peritos_judiciales->Peritos_Condicion_cuatro_Observa=$request->Peritos_judiciales_Obserbaciones_4;

       $peritos_judiciales->Peritos_Condicion_cinco=$request->Peritos_judiciales_SI_5;
       $peritos_judiciales->Peritos_Condicion_cinco=$request->Peritos_judiciales_NO_5;
       $peritos_judiciales->Peritos_Condicion_cinco_Observa=$request->Peritos_judiciales_Obserbaciones_5;

       $peritos_judiciales->Peritos_Condicion_seis=$request->Peritos_judiciales_SI_6_1;
       $peritos_judiciales->Peritos_Condicion_seis=$request->Peritos_judiciales_NO_6_1;
       $peritos_judiciales->Peritos_Condicion_seis_Observa=$request->Peritos_judiciales_Obserbaciones_6_1;


       $peritos_judiciales->Peritos_Condicion_seis_uno=$request->Peritos_judiciales_SI_6_2;
       $peritos_judiciales->Peritos_Condicion_seis_uno=$request->Peritos_judiciales_NO_6_2;
       $peritos_judiciales->Peritos_Condicion_seis_Observa=$request->Peritos_judiciales_Obserbaciones_6_2;


       $peritos_judiciales->Peritos_Condiciom_siete=$request->Peritos_judiciales_SI_7;
       $peritos_judiciales->Peritos_Condiciom_siete=$request->Peritos_judiciales_NO_7;
       $peritos_judiciales->Peritos_Condicion_siete_Observa=$request->Peritos_judiciales_Obserbaciones_7;

       $peritos_judiciales->Peritos_Acciones_uno=$request->Peritos_judiciales_Acciones_1;
       $peritos_judiciales->Peritos_Acciones_dos=$request->Peritos_judiciales_Acciones_2;
       $peritos_judiciales->Usuario_idUsuario=$request->iduser;

       $peritos_judiciales->save();

       $cuerpos_delito=new Cuerpos_Delito();
       $cuerpos_delito->Cuerpos_Condicion_uno=$request->Cuerpo_delito_efectos_SI_1;
       $cuerpos_delito->Cuerpos_Condicion_uno=$request->Cuerpo_delito_efectos_NO_1;
       $cuerpos_delito->Cuerpos_Condicion_uno_Observa=$request->Cuerpo_delito_efectos_Observaciones_1;

       $cuerpos_delito->Cuerpos_Condicion_dos=$request->Cuerpo_delito_efectos_SI_2_1;
       $cuerpos_delito->Cuerpos_Condicion_dos=$request->Cuerpo_delito_efectos_NO_2_1;
       $cuerpos_delito->Cuerpos_Condicion_dos_Observa=$request->Cuerpo_delito_efectos_Observaciones_2_1;

       $cuerpos_delito->Cuerpos_Condicion_dos_uno=$request->Cuerpo_delito_efectos_SI_2_2;
       $cuerpos_delito->Cuerpos_Condicion_dos_uno=$request->Cuerpo_delito_efectos_NO_2_2;
       $cuerpos_delito->Cuerpos_Condicion_dos_uno_Observa=$request->Cuerpo_delito_efectos_Observaciones_2_2;

       $cuerpos_delito->Cuerpos_Condicion_tres=$request->Cuerpo_delito_efectos_SI_3;
       $cuerpos_delito->Cuerpos_Condicion_tres=$request->Cuerpo_delito_efectos_NO_3;
       $cuerpos_delito->Cuerpos_Condicion_tres_Observa=$request->Cuerpo_delito_efectos_Observaciones_3;

       $cuerpos_delito->Cuerpos_Condiciones_cuatro=$request->Cuerpo_delito_efectos_SI_4_1;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro=$request->Cuerpo_delito_efectos_NO_4_1;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro_Observa=$request->Cuerpo_delito_efectos_Observaciones_4_1;

       $cuerpos_delito->Cuerpos_Condiciones_cuatro_uno=$request->Cuerpo_delito_efectos_SI_4_2;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro_uno=$request->Cuerpo_delito_efectos_NO_4_2;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro_uno_Observa=$request->Cuerpo_delito_efectos_Observaciones_4_2;

       $cuerpos_delito->Cuerpos_Condicion_cinco=$request->Cuerpo_delito_efectos_SI_5;
       $cuerpos_delito->Cuerpos_Condicion_cinco=$request->Cuerpo_delito_efectos_NO_5;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro_uno_Observa=$request->Cuerpo_delito_efectos_Observaciones_5;


       $cuerpos_delito->Cuerpos_Condicion_Seis=$request->Cuerpo_delito_efectos_SI_6;
       $cuerpos_delito->Cuerpos_Condicion_Seis=$request->Cuerpo_delito_efectos_NO_6;
       $cuerpos_delito->Cuerpos_Condiciones_cuatro_uno_Observa=$request->Cuerpo_delito_efectos_Observaciones_6;

       $cuerpos_delito->Cuerpos_Acciones_uno=$request->Cuerpo_delito_efectos_ACCIONES_1;
       $cuerpos_delito->Cuerpos_Acciones_dos=$request->Cuerpo_delito_efectos_ACCIONES_2;
       $cuerpos_delito->Cuerpos_Acciones_tres=$request->Cuerpo_delito_efectos_ACCIONES_3;
       $cuerpos_delito->Usuario_idUsuario=$request->Usuario_idUsuario=$request->iduser;
       $cuerpos_delito->save();

       $recaudacion_judicial=new Recaudacion_judicial();
       $recaudacion_judicial->Recau_Comprobantes_pago=$request->Recaudacion_judicial_SI_1;
       $recaudacion_judicial->Recau_Comprobantes_pago=$request->Recaudacion_judicial_NO_1;

       $recaudacion_judicial->Recau_Sello_Utilzada=$request->Recaudacion_judicial_SI_1_1;
       $recaudacion_judicial->Recau_Sello_Utilzada=$request->Recaudacion_judicial_NO_1_1;

       $recaudacion_judicial->Recau_Sello_fechador=$request->Recaudacion_judicial_SI_1_2;
       $recaudacion_judicial->Recau_Sello_fechador=$request->Recaudacion_judicial_NO_1_2;

       $recaudacion_judicial->Recau_Datos_Presenta=$request->Recaudacion_judicial_SI_1_3;
       $recaudacion_judicial->Recau_Datos_Presenta=$request->Recaudacion_judicial_NO_1_3;

       $recaudacion_judicial->Recaudacion_Cumplen_Prestar=$request->Recaudacion_judicial_SI_1_4;
       $recaudacion_judicial->Recaudacion_Cumplen_Prestar=$request->Recaudacion_judicial_NO_1_4;

       $recaudacion_judicial->Recau_Sistema_Validacion=$request->Recaudacion_judicial_S1_2;
       $recaudacion_judicial->Recau_Sistema_Validacion=$request->Recaudacion_judicial_NO_2;

       $recaudacion_judicial->Reca_Respuesta_Negativa=$request->Recaudacion_judicial_S1_2_1;
       $recaudacion_judicial->Reca_Respuesta_Negativa=$request->Recaudacion_judicial_NO_2_1;

       $recaudacion_judicial->Reca_Respuesta_Afirmativa=$request->Recaudacion_judicial_S1_2_2;
       $recaudacion_judicial->Reca_Respuesta_Afirmativa=$request->Recaudacion_judicial_NO_2_2;

       $recaudacion_judicial->Reca_Nota_Situacion=$request->Recaudacion_judicial_S1_2_3;
       $recaudacion_judicial->Reca_Nota_Situacion=$request->Recaudacion_judicial_NO_2_3;

       $recaudacion_judicial->Recaudacion_Expedientes_fenecidos=$request->Recaudacion_judicial_S1_3;
       $recaudacion_judicial->Recaudacion_Expedientes_fenecidos=$request->Recaudacion_judicial_NO_3;

       $recaudacion_judicial->Recaudacion_Resp_Afirmativa=$request->Recaudacion_judicial_S1_3_1;
       $recaudacion_judicial->Recaudacion_Resp_Afirmativa=$request->Recaudacion_judicial_NO_3_1;

       $recaudacion_judicial->Recaudacion_Nota_situcacion_3=$request->Recaudacion_judicial_S1_3_2;
       $recaudacion_judicial->Recaudacion_Nota_situcacion_3=$request->Recaudacion_judicial_NO_3_2;

       $recaudacion_judicial->Reca_Cumplen_Verificar=$request->Recaudacion_judicial_S1_4;
       $recaudacion_judicial->Reca_Cumplen_Verificar=$request->Recaudacion_judicial_NO_4;

       $recaudacion_judicial->Reca_Presentase_Aranceles_Judiciales=$request->Recaudacion_judicial_S1_4_1;
       $recaudacion_judicial->Reca_Presentase_Aranceles_Judiciales=$request->Recaudacion_judicial_NO_4_1;

       $recaudacion_judicial->Reca_Presentacion_Derechos_Notificacion=$request->Recaudacion_judicial_SI_5;
       $recaudacion_judicial->Reca_Presentacion_Derechos_Notificacion=$request->Recaudacion_judicial_NO_5;

       $recaudacion_judicial->recaud_judicial_Perio=$request->Recaudacion_judicial_periodicidad;
       $recaudacion_judicial->recaud_judicial_Num_Ofici=$request->Recaudacion_judicial_Oficio;
       $recaudacion_judicial->recaud_judicial_Fecha=$request->Recaudacion_judicial_fecha;

       $recaudacion_judicial->recaudacion_judicial_Afirma_Periodi=$request->Recaudacion_judicial_afirmativa_periodicidad;
       $recaudacion_judicial->recauda_judicial_Afirma_Num_Oficio=$request->Recaudacion_judicial_afirmativa_Oficio;
       $recaudacion_judicial->ecauda_judicial_Afirma_Fecha=$request->Recaudacion_judicial_afirmativa_fecha;
       $recaudacion_judicial->Usuario_idUsuario=$request->Usuario_idUsuario=$request->iduser;

       $recaudacion_judicial->save();

       $cobranza_multa=new Cobranzas_multas();
       $cobranza_multa->Condicion_uno_Libro_Registros=$request->Cobransas_certificados_SI_1;
       $cobranza_multa->Condicion_uno_Libro_Registros=$request->Cobransas_certificados_NO_1;

       $cobranza_multa->Condicion_uno_Respuesta_Afirmativa=$request->Cobransas_certificados_SI_1_1;
       $cobranza_multa->Condicion_uno_Respuesta_Afirmativa=$request->Cobransas_certificados_NO_1_1;

       $cobranza_multa->Condicion_dos_Respuesta_Negativa=$request->Cobransas_certificados_SI_2;
       $cobranza_multa->Condicion_uno_Respuesta_Afirmativa=$request->Cobransas_certificados_N0_2;

       $cobranza_multa->Condicion_dos_Ultimos_Meses=$request->Cobransas_certificados_SI_2_1;
       $cobranza_multa->Condicion_dos_Ultimos_Meses=$request->Cobransas_certificados_N0_2_1;

       $cobranza_multa->Condicion_Dos_A=$request->Cobransas_certificados_SI_2_2;
       $cobranza_multa->Condicion_Dos_A=$request->Cobransas_certificados_N0_2_2;

       $cobranza_multa->Condicion_Dos_B=$request->Cobransas_certificados_SI_2_3;
       $cobranza_multa->Condicion_Dos_B=$request->Cobransas_certificados_N0_2_3;

       $cobranza_multa->Condicion_Dos_C=$request->Cobransas_certificados_SI_2_4;
       $cobranza_multa->Condicion_Dos_C=$request->Cobransas_certificados_N0_2_4;

       $cobranza_multa->Condicion_Dos_D=$request->Cobransas_certificados_SI_2_5;
       $cobranza_multa->Condicion_Dos_D=$request->Cobransas_certificados_N0_2_5;

       $cobranza_multa->Condicion_tres_Precidencia_corte=$request->Cobransas_certificados_SI_3;
       $cobranza_multa->Condicion_tres_Precidencia_corte=$request->Cobransas_certificados_NO_3;

       $cobranza_multa->Condicion_tres_Cargo_Remision=$request->Cobransas_certificados_SI_3_1;
       $cobranza_multa->Condicion_tres_Cargo_Remision=$request->Cobransas_certificados_NO_3_1;

       $cobranza_multa->Condicion_tres_Nota=$request->Cobransas_certificados_SI_3_2;
       $cobranza_multa->Condicion_tres_Nota=$request->Cobransas_certificados_NO_3_2;

       $cobranza_multa->Condicion_cuatro=$request->Cobransas_certificados_SI_4;
       $cobranza_multa->Condicion_cuatro=$request->Cobransas_certificados_NO_4;

       $cobranza_multa->Condicion_sinco=$request->Cobransas_certificados_SI_5;
       $cobranza_multa->Condicion_sinco=$request->Cobransas_certificados_NO_5;

       $cobranza_multa->Condicion_seis=$request->Cobransas_certificados_SI_6;
       $cobranza_multa->Condicion_seis=$request->Cobransas_certificados_NO_6;

       $cobranza_multa->Cobranza_acciones_uno=$request->Cobransas_certificados_ACCIONES_1;
       $cobranza_multa->Cobranzas_acciones_dos=$request->Cobransas_certificados_ACCIONES_2;

       $cobranza_multa->Cobranzas_acciones_tres=$request->Cobransas_certificados_ACCIONES_3;























   }
}

<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Aspectos_Generales extends Model
{
    protected $table="aspectos_generales_inmueble";
    protected $primaryKey="idAspectos_Generales_Inmueble";
    public $timestamps=false;
    protected $fillable = [
        'Aspec_Gene_Estructuras_Defi','Aspec_Gene_Puertas_Defi',
        'Aspect_Gene_Ventanas_Defi','Aspect_Gene_Pisos_Defi','Aspect_Gene_Pintura_Defi',
        'Aspect_Instalaciones_sanitarias_Defi','Aspect_Gene_Electricas_Defi','Aspect_Gene_Brinsa_Seguridad_Defi',
        'Aspect_Gene_manteni_local_defi','Aspect_Gene_Otros_Defi','Aspect_Gene_Advertencia_Difi',
        'Aspect_Gene_Alquilado_1','Aspect_Gene_Alquilado_2','Aspect_Gene_Alquilado_3',
        'Aspect_Gene_Cedido_1','Aspect_Gene_Cedido_2', 'Aspect_Gene_Cedido_3',

        'Aspec_Gene_Estructuras_Acc', 'Aspec_Gene_Puertas_Acc','Aspect_Gene_Ventanas_Acc', 'Aspect_Gene_Pisos_Acc',
        'Aspect_Gene_Pintura_Acc','Aspect_Instalaciones_sanitarias_Acc', 'Aspect_Gene_Electricas_Acc',
        'Aspect_Gene_Brinsa_Seguridad_Acc','Aspect_Gene_manteni_local_Acci','Aspect_Gene_Otros_Acc',
        'Aspect_Gene_Advertencia_Acc',

        'Usuario_idUsuario',
    ];
}

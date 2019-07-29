<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Aspectos_seguridad extends Model
{
    protected $table="aspectos_seguridad";
    protected $primaryKey="idAspectos_Seguridad";
    public $timestamps=false;
    protected $fillable = [
        'Aspecto_segu_Detectores_metal_Defi','Aspecto_segu_Extintotores_Defi',
        'Aspecto_segu_Mangueras_Defi','Aspecto_segu_Otros_Defi',
        'Aspecto_Segu_Advertencia_Defi', 'Aspecto_segu_Detectores_metal_Acc',
        'Aspecto_segu_Extintotores_Acc','Aspecto_segu_Mangueras_Acc','Aspecto_segu_Otros_Acc',
        'Aspecto_Segu_Advertencia_Acc','Usuario_idUsuario',
    ];
}

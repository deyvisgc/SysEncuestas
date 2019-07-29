<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{

    protected $table="mobiliario";
    protected $primaryKey="idMobiliario";
    public $timestamps=false;
    protected $fillable = [
        'Mobi_Armarios_Archiva_Defi','Mobi_Estanteria_Metalica_Defi',
        'Mobi_Escritorio_mesas_Defi','Mobi_sillas_sillones_Defi','Mobi_Modulos_Defi',
        'Mobi_Otros_Defi','Advertencia_Mobiliario_Defi',

        'Mobi_Armarios_Archiva_Acci','Mobi_Estanteria_Metalica_Acci',
        'Mobi_Escritorio_mesas_Acci','Mobi_sillas_sillones_Acci','Mobi_Modulos_Acci',
        'Mobi_Otros_Acci','Advertencia_Mobiliario_Acci', 'Usuario_idUsuario',
    ];
}

<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Suministro_Materiales extends Model
{

    protected $table="suministro_materiales";
    protected $primaryKey="idSuministro_Materiales";
    public $timestamps=false;
    protected $fillable = [
        'sumi_Boligrafos_Grapas_Defi','Sumi_Cinta_Impresora_Defi',
        'Sumi_Caratulas_Defi','Sumi_Peruano_Defi','Sumi_Otros_Defi',
        'Sumi_Advertencia_Defi','Usuario_idUsuario','sumi_Boligrafos_Grapas_Acci',
        'Sumi_Cinta_Impresora_Acci', 'Sumi_Caratulas_Acci', 'Sumi_Peruano_Acci',
        'Sumi_Otros_Acci','Sumi_Advertencia_Acci',
    ];
}

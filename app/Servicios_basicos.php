<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Servicios_basicos extends Model
{
    protected $table="servicios_basicos";
    protected $primaryKey="idServicios_Basicos";
    public $timestamps=false;
    protected $fillable = [
        'Servi_Basi_Ener_Elec_Defi','Servi_Basi_Agua_Defi',
        'Servi_Basi_Telefo_Inter_Defi','Servi_Basi_Otros_Defi','Servi_Basi_Adver_Defi',
        'Servi_Basi_Ener_Elec_Acc','Servi_Basi_Agua_Acc','Servi_Basi_Telefo_Inter_Acci',
        'Servi_Basi_Otros_Acci', 'Servi_Basi_Adver_Acci', 'Usuario_idUsuario',
    ];
}

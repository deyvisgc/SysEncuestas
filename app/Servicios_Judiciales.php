<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Servicios_Judiciales extends Model
{
    protected $table="servicio_judiciales";
    protected $primaryKey="idServicio_Judiciales";
    public $timestamps=false;
    protected $fillable = [
        'Condicion_uno','Condicion_dos',
        'Condicion_tres','Condicion_cuatro','Acciones_Adoptadas_uno',
        'Acciones_Adoptadas_dos','Acciones_Adoptadoas_tres','Acciones_Adoptadas_cuatro',
        'Acciones_Adoptadas_cinco', 'Usuario_idUsuario', 'Condicion_uno_Observa',
        'Condicion_dos_Observa','Condicion_tres_Observa','Condicion_cuatro_Observa','Condicion_cuatro1_Observa',
    ];
}

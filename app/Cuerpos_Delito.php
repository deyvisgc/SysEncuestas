<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Cuerpos_Delito extends Model
{
    protected $table="cuerpos_delito_efectos";
    protected $primaryKey="idCuerpos_delito_EFECTOS";
    public $timestamps=false;
    protected $fillable = [
        'Cuerpos_Condicion_uno','Cuerpos_Condicion_dos',
        'Cuerpos_Condicion_tres','Cuerpos_Condiciones_cuatro','Cuerpos_Condicion_cinco',
        'Cuerpos_Condicion_Seis','Cuerpos_Acciones_uno','Cuerpos_Acciones_dos',
        'Cuerpos_Acciones_tres','Cuerpos_Condicion_dos_uno','Cuerpos_Condiciones_cuatro_uno',

        'Cuerpos_Condicion_uno_Observa','Cuerpos_Condicion_dos_Observa',
        'Cuerpos_Condicion_dos_uno_Observa','Cuerpos_Condicion_tres_Observa','Cuerpos_Condiciones_cuatro_uno_Observa',
        'Cuerpos_Condiciones_cuatro_Observa','Cuerpos_Condicion_cinco_Observa','Cuerpos_Condicion_Seis_Observa',
        'Usuario_idUsuario',
    ];
}

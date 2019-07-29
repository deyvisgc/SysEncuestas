<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Peritos_judiciales extends Model
{
    protected $table="peritos_judiciales";
    protected $primaryKey="idPeritos_Judiciales";
    public $timestamps=false;
    protected $fillable = [
        'Peritos_Condicion_uno','Peritos_Condicion_dos',
        'Peritos_Condicion_tres','Peritos_Condicion_cuatro','Peritos_Condicion_cinco',
        'Peritos_Condicion_seis','Peritos_Condiciom_siete','Peritos_Observaciones','Peritos_Acciones_uno',
        'Peritos_Acciones_dos','Peritos_Condicion_dos_uno','Peritos_Condicion_seis_uno',

        'Peritos_Condicion_uno_observa', 'Peritos_Condicion_dos_Observa','Peritos_Condicion_dos_uno_Observa',
        'Peritos_Condicion_tres_Observa', 'Peritos_Condicion_cuatro_Observa','Peritos_Condicion_cinco_Observa',
        'Peritos_Condicion_seis_uno_Observa', 'Peritos_Condicion_seis_Observa','Peritos_Condicion_siete_Observa_',
        'Usuario_idUsuario',
    ];
}

<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Auxilio_Judicial extends Model
{
    protected $table="auxilio_judicial";
    protected $primaryKey="idAuxilio_Judicial";
    public $timestamps=false;
    protected $fillable = [
        'auxi_Judi_Condici_uno','auxi_Judi_Condici_dos',
        'auxi_Judi_Condici_tres','auxi_Judi_Condici_cuatro','auxi_Judi_Condici_cinco',
        'auxi_Judi_Condici_seis','auxi_Judi_Acciones_uno','auxi_Judi_Acciones_dos',
        'auxi_Judi_Acciones_tres','auxi_Judi_Condici_uno_Observa','auxi_Judi_Condici_dos_Observa',
        'auxi_Judi_Condici_tres_Observa','auxi_Judi_Condici_cuatro_Observa','auxi_Judi_Condici_cinco_Observa',
        'auxi_Judi_Condici_seis_Observa','Condici_dos_uno','auxi_Judi_Condici_dos_uno_Observa', 'Usuario_idUsuario',
    ];
}

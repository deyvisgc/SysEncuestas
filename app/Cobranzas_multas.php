<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Cobranzas_multas extends Model
{
    protected $table="cobranzas_multas_certificados";
    protected $primaryKey="idCobranzas_Multas_Certificados";
    public $timestamps=false;
    protected $fillable = [
        'Condicion_uno_Libro_Registros','Condicion_uno_Respuesta_Afirmativa',
        'Condicion_dos_Respuesta_Negativa','Condicion_dos_Ultimos_Meses','Condicion_Dos_A',
        'Condicion_Dos_B','Condicion_Dos_C','Condicion_Dos_D',
        'Condicion_tres_Precidencia_corte','Condicion_tres_Cargo_Remision','Condicion_tres_Nota',
        'Condicion_cuatro','Condicion_sinco',
        'Condicion_seis','Cobranza_acciones_uno','Cobranzas_acciones_dos',
        'Cobranzas_acciones_tres','Usuario_idUsuario',
    ];
}

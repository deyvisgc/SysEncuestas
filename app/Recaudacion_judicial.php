<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Recaudacion_judicial extends Model
{
    protected $table="recaudacion_judicial";
    protected $primaryKey="idRecaudacion_Judicial";
    public $timestamps=false;
    protected $fillable = [
        'Recau_Comprobantes_pago','Recau_Sello_Utilzada',
        'Recau_Sello_fechador','Recau_Datos_Presenta','Recaudacion_Cumplen_Prestar',
        'Recau_Sistema_Validacion','Reca_Respuesta_Negativa','Reca_Respuesta_Afirmativa','Reca_Nota_Situacion',
        'Reca_Cumplen_Verificar','Reca_Presentase_Aranceles_Judiciales','Reca_Presentacion_Derechos_Notificacion',
        'recaud_judicial_Perio', 'recaud_judicial_Num_Ofici','recaud_judicial_Fecha',
        'recaudacion_judicial_Afirma_Periodi', 'recauda_judicial_Afirma_Num_Oficio','ecauda_judicial_Afirma_Fecha',
        'Usuario_idUsuario',
    ];
}

<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Administrativa extends Model
{
    protected $table="administrativa";
    protected $primaryKey="idAdministrativa";
    public $timestamps=false;
    protected $fillable = [
        'Presidente_corte','Gerente_Administrativo',
        'Organo_Juridicial','Direccion','Magistrado',
        'Fecha_Programacion','Fecha_Ejecucion','Usuario_idUsuario',
    ];
}

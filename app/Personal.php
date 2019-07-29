<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table="personal";
    protected $primaryKey="idPersonal";
    public $timestamps=false;
    protected $fillable = [
        'Personal_Total','Regi_Trabajadores',
        'Regi_Magistrado','Regi_Trabajadores_1','Regis_Ftocheck',
        'Obersvaciones','Observaciones1','Usuario_idUsuario',

    ];
}

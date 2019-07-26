<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

    protected $table="rol";
    protected $primaryKey="idRol";
    public $timestamps=false;
    protected $fillable = [
        'Nombre_Rol',
    ];
}

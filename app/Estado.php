<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table="estado";
    protected $primaryKey="idestado";
    public $timestamps=false;
    protected $fillable = [
        'user_estado', 'Usuario_idUsuario',
    ];
}

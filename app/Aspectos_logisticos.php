<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Aspectos_logisticos extends Model
{
    protected $table="aspectos_logisticos";
    protected $primaryKey="idAspectos_Logisticos";
    public $timestamps=false;
    protected $fillable = [
        'Servi_Tercer_Mensa_Defi','Servi_Tercer_fotocop_Defi',
        'Servi_Tercer_linpieza_Defi','Servi_Tercer_Traducc_Defi','Servi_Tercer_Publica_Defi',
        'Servi_Tercer_Arrenda_Defi','Servi_Tercer_Manten_Defi','Servi_Tercer_Otros_Defi',
        'Servi_Tercer_Adverten_Defi','Usuario_idUsuario',

        'Servi_Tercer_Mensa_Acci','Servi_Tercer_fotocop_Acci',
        'Servi_Tercer_linpieza_Acci','Servi_Tercer_Traducc_Acc','Servi_Tercer_Publica_Acc',
        'Servi_Tercer_Arrenda_Acci','Servi_Tercer_Manten_Acc','Servi_Tercer_Otros_Acc',
        'Servi_Tercer_Adverten_Acci',
    ];
}

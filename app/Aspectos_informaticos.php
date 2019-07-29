<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Aspectos_informaticos extends Model
{
    protected $table="aspectos_informaticos";
    protected $primaryKey="idAspectos_Informaticos";
    public $timestamps=false;
    protected $fillable = [
        'Aspect_Infor_Compu_Defi','Aspect_infor_Impres_Defi',
        'Aspect_Infor_Fax_Defi','Aspect_Infor_Mante_Equi_Defi','Aspect_Infor_Ups_Defi',
        'Aspect_Infor_Supresor_Defi','Aspect_Infor_correo_Defi','Aspect_Sistemas_Informaticos',
        'Aspect_Redes_Informaticos_Defi','Aspect_Infor_Otros_Defi','Aspect_Infor_Advert_Defi',

        'Aspect_Infor_Compu_Acc','Aspect_infor_Impres_Acc', 'Aspect_Infor_Fax_Acc','Aspect_Infor_Mante_Equi_Acci',
        'Aspect_Infor_Ups_Acc', 'Aspect_Infor_Supresor_Acc','Aspect_Infor_correo_Acc',
        'Aspect_Sistemas_Informaticos_Acc', 'Aspect_Redes_Informaticos_Acc','Aspect_Infor_Otros_Acc',
        'Aspect_Infor_Advert_Acc', 'Usuario_idUsuario',
    ];
}

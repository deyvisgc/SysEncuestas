<?php

namespace SysEncuesta;

use Illuminate\Database\Eloquent\Model;

class Areas_judiciales extends Model
{
    protected $table="areas_judiciales_apoyo";
    protected $primaryKey="idArea_Judicial_Apoyo";
    public $timestamps=false;
    protected $fillable = [
        'Mesa_partes_Deficiencias','Archivo_Jurisdicionales_Deficiencias',
        'Notificaciones_Judiciales_Deficiencias','Publicacion_Edictos_Deficiencias',
        'Convenio_Reniec_Deficiencias', 'Requesitos_Deficiencias','Areas_judiciales_Otros_Deficiencias',
        'Areas_judiciales_Advertencia_Deficiencias','Usuario_idUsuario',

        'Mesa_partes_Accio','Archivo_Juris_Accio',
        'Notificaciones_Judiciales_Accio','Publicacion_Edictos_Accio',
        'Convenio_Reniec_Accio', 'Requesitos_Accio','Areas_judiciales_Otros_Accio',
        'Areas_judiciales_Advertencia_Accio',
    ];
}

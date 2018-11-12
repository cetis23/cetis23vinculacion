<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    
    protected $primaryKey = 'idalumn';
    protected $fillable=['idalumn','app','apm','nomalumn','grupo','turno','tel1','tel2',
                         'correo1','correo2','cp','modalidad','idmun','idespe','idpractica',
                         'iddoc','idtitulo'];
	

}

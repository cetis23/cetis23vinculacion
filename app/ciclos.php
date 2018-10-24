<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ciclos extends Model
{
    
    protected $primaryKey = 'idciclo';
    protected $fillable=['idciclo','fechainicio', 'fechafin'];
	
	
}
 
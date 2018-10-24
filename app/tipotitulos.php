<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class tipotitulos extends Model
{
    
    protected $primaryKey = 'idtipotitulo';
    protected $fillable=['idtipotitulo','nomtipo','idtitulo'];
	

}

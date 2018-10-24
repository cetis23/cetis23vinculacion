<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class titulos extends Model
{
    
    protected $primaryKey = 'idtitulo';
    protected $fillable=['idtitulo','folio ','idciclo'];
	
protected $date=['delete_at'];	
}

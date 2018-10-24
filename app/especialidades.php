<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidades extends Model
{
    protected $primaryKey = 'idespe';
    protected $fillable=['idespe','nomespe'];
}

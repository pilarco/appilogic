<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apiario extends Model
{
    protected $table = "apiarios";
    protected $fillable = ['nombre_apiario', 'cantidad_colmenas', 'municipio'];
}

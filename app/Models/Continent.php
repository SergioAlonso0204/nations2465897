<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = "continents";
    protected $primaryKey = "continent_id";

    use HasFactory;

    // relacion 1:M con regiones
    public function regiones(){
        //hasMany : Parametros
        //1 Modelo a relacionar
        //FK del modelo actual en el modelo a relacionar
      return $this->hasMany( Region::class ,
                                 'region_id' );
    }
}

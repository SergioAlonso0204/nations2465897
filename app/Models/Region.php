<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
protected $table = "regions";
protected $primaryKey = "region_id";



    use HasFactory;

    public function continente(){
        //belongsTo: Parametros
        //1 Modelo a relacionar
        //2 la FK del modelo a relacionar, en el modelo
        //actual

        return $this->belongsTo(Continent::class, 
                                          "continent_id");


    }


    public function paises(){
               return $this->hasMany(Country::class, 
                                          "region_id");


}

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
  
    
{
    protected $table = "countries"; 
    protected $primaryKey = "country_id"; 
    
    use HasFactory;

    public function idiomas(){
        //belongsToMany Parametros
        //1 modelo a relacionar
        //2 la tabla pivote
        //3 FK de el modelo actual en el pivote
        //4 FK del modelo a relacionar en el pivote


      return $this->belongsToMany(Language::class,
                                  'country_languages',
                                  'country_id',
                                  'language_id'  );
    }
}

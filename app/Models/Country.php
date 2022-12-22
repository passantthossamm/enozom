<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;


  
    protected $table="countries";
    protected $primarykey="country_id";
    protected $fillable=['country_id','city_id','population_id','state_id','name', 
                         'capital','currency','flag', 
                         'iso2','iso3','long','lat'];


    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }

    public function country()
    {
        return $this->belongsTo(Language::class,'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }

    public function population()
    {
        return $this->belongsTo(Population::class,'population_id');
    }


    
   
}
    
   


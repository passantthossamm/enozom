<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $table="population";
    protected $primarykey="population_id";
    protected $fillable=['population_id','year','value','sex','reliability','country_id'];

    public function country()
    {
        return $this->hasMany(Country::class,'country_id');
    }
}

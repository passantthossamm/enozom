<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table="cities";
    protected $primarykey="city_id";
    protected $fillable=['city_id','name','country_id'];

    public function country()
    {
        return $this->hasMany(Country::class,'country_id');
    }
}
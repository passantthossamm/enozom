<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table="states";
    protected $primarykey="state_id";
    protected $fillable=['state_id','name','state_code','country_id'];

    public function country()
    {
        return $this->hasMany(Country::class,'country_id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


use App\Models\Country;

use App\Models\City;

use App\Models\Population;

use App\Models\State;
use Illuminate\Database\RecordsNotFoundException;

class CountryController extends Controller
{
    /*


   
    

    function getDataApi(){        
        
        //Get countries and their positions


        return Http::get('https://countriesnow.space/api/v0.1/countries/positions');


    }




    function getDataApi(){     //Get countries and unicode flags

        return Http::get('https://countriesnow.space/api/v0.1/countries/flag/unicode');
    }    



    
    function getDataApi(){         //Countries and flag URL

        $response = Http::get('https://countriesnow.space/api/v0.1/countries/flag/images');

        $flags = json_decode($response->body());

        foreach($flags as $flag){
           // $question = new Question;
           
           // $question->save();
    
    return "DONE";


      }

      */


      function getDataApi()
      {
          //Get all countries and respective population

       
        $response = Http::get( 'https://countriesnow.space/api/v0.1/countries/population');

        $object = json_decode($response->body());

      $records = $object->data;

        foreach($records as $record)
        {

            $country = new Country();
            
           
           
            $country->name = $record->country;
            $country->code = $record->code;
            $country->iso3 = $record->iso3;
           
            $country->save();

   

    }


    }


    function getPopulationData()
    {
        //Get all countries and respective population

     
      $response = Http::get( 'https://countriesnow.space/api/v0.1/countries/population/cities');

      $object = json_decode($response->body());

     

    $records = $object->data;

 $pops = $records['populationCounts'];


     dd($pops);
   
      foreach($records as $record)
      {

          $pop = new Population();
          
          $pop->year = $record->year;
          $pop->value = $record->value;
          $pop->sex = $record->sex;
          $pop->reliabilty = $record->reliabilty;
         
          $pop->save();

          

  }


  return "DONE";
}


}







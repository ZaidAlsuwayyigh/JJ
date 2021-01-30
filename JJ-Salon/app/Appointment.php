<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

  protected $fillable= [
    'menuofservices',
    'price'
  ];

  // public function setMenuOfServicesAttribute($value)
  //   {
  //       $this->attributes['menuofservices'] = json_encode($value);
  //   }
  //
  //   /**
  //    * Get the categories
  //    *
  //    */
  //   public function getMenuOfServicesAttribute($value)
  //   {
  //       return $this->attributes['menuofservices'] = json_decode($value);
  //   }

  public function user(){
    return $this->hasOne('App\User');
  }

}

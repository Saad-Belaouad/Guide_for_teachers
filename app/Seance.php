<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
  protected  $fillable=['id','cours','jour','tempsseance','dated','datef','tempsseancef','classe','user_id','nombreseance'];
  public $timestamps =false;
  public function user(){
      return $this->belongsTo(User::class,'user_id');
  }


}

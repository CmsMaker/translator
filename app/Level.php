<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'level',
  ];

    public function users(){
      return $this->hasMany('App\Level');
    }
}

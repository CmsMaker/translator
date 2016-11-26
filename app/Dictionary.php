<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
  protected $fillable = [
      'pe_word',
      'en_word',
  ];
}

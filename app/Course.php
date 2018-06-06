<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  public function program()
  {
      return $this->belongsTo('App\Program');
  }
  public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}

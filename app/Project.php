<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $table = 'projects';
  protected $primaryKey = 'id';

  public function comments(){
    return $this->hasMany('App\Comment');
  }
}

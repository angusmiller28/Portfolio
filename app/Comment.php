<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'comments';
  protected $primaryKey = 'id';

  public function blog(){
      return $this->belongsTo('App\Blog');
  }

  public function user(){
      return $this->belongsTo('App\User');
  }

  public function admin(){
      return $this->belongsTo('App\Admin');
  }
}

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

  public function project(){
      return $this->belongsTo('App\Project');
  }

  public function product(){
      return $this->belongsTo('App\Product');
  }

  public function user(){
      return $this->belongsTo('App\User');
  }

  public function admin(){
      return $this->belongsTo('App\Admin');
  }
}

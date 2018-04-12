<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'id';

  public function images(){
      return $this->hasMany('App\ProductImage');
  }

  public function videos(){
      return $this->hasMany('App\ProductVideo');
  }
}

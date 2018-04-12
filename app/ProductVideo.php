<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
  protected $table = 'products_videos';
  protected $primaryKey = 'id';

  public function product(){
      return $this->belongsTo('App\Product');
  }
}

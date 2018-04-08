<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
  protected $table = 'technicals';
  protected $primaryKey = 'technical_id';
  public $timestamps = false;
}

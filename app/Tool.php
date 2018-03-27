<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
  protected $table = 'tools';
  protected $primaryKey = 'tool_id';
  public $timestamps = false;
}

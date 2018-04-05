<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table = 'educations';
  protected $primaryKey = 'educations_id';
  public $timestamps = false;
}

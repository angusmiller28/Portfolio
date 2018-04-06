<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table = 'educations';
  protected $primaryKey = 'education_id';
  public $timestamps = false;
}

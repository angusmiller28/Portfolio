<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
  protected $table = 'resumes';
  protected $primaryKey = 'resume_id';
  public $timestamps = false;
}
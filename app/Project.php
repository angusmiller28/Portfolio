<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    public $timestamps = false;

    /**
     * Get the tools for the project.
     */
    public function tools()
    {
        return $this->hasMany('App\Tool');
    }
}

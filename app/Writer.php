<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    public function novels()
    {
        return $this->belongsToMany('App\Novel');
    }
}

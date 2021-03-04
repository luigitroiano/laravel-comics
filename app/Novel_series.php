<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel_series extends Model
{
    public function novels()
    {
        return $this->hasMany('App\Novel');
    }
}

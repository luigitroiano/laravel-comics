<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    public function artist()
    {
        return $this->belongsToMany('App\Artist');
    }

    public function writers()
    {
        return $this->belongsToMany('App\Writer');
    }
}

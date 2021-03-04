<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $fillable = ['name', 'description', 'price', 'available', 'on_sale_date', 'volume', 'trim_size', 'page', 'rated', 'cover', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function artist()
    {
        return $this->belongsToMany('App\Artist');
    }

    public function writers()
    {
        return $this->belongsToMany('App\Writer');
    }
    public function novel_series()
    {
        return $this->belongsTo('App\Novel_series');
    }
}

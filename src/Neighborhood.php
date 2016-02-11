<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'city_id', 'name', 'slug'];

    public function city()
    {
        return $this->belongsTo('Mixdinternet\Cities\City');
    }
}

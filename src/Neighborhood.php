<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\Cache\Cacheable;

class Neighborhood extends Model
{
    use Cacheable;

    public $timestamps = false;

    protected $fillable = [
        'id', 'city_id', 'name', 'slug'
    ];

    public function city()
    {
        return $this->belongsTo('Mixdinternet\Cities\City');
    }
}

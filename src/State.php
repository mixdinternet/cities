<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\Cache\Cacheable;

class State extends Model
{
    use Cacheable;

    public $timestamps = false;

    protected $fillable = [
        'id', 'abbrev', 'name', 'slug'
    ];

    public function cities()
    {
        return $this->hasMany('Mixdinternet\Cities\City');
    }

}

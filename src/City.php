<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\Cache\Cacheable;

class City extends Model
{
    use Cacheable;

    public $timestamps = false;

    protected $fillable = [
        'id', 'state_id', 'name', 'slug'
    ];

    public function state()
    {
        return $this->belongsTo('Mixdinternet\Cities\State');
    }

    public function neighborhoods()
    {
        return $this->hasMany('Mixdinternet\Cities\Neighborhood');
    }

}

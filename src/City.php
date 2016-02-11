<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'state_id', 'name', 'slug'];

    public function state()
    {
        return $this->belongsTo('Mixdinternet\Cities\State');
    }

    public function neighborhoods()
    {
        return $this->hasMany('Mixdinternet\Cities\Neighborhood');
    }

}

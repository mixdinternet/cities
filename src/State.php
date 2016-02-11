<?php

namespace Mixdinternet\Cities;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'abbrev', 'name', 'slug'];

    public function cities()
    {
        return $this->hasMany('Mixdinternet\Cities\City');
    }

}

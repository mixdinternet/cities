<?php

namespace Mixdinternet\Cities\Http\Controllers;

use App\Http\Controllers\Controller;

use Mixdinternet\Cities\State;
use Mixdinternet\Cities\City;
use Mixdinternet\Cities\Neighborhood;
use Cache;

class ApiController extends Controller
{

    public function states()
    {

        return Cache::get('api.states', function() {
            $val = State::orderBy('order', 'desc')->orderBy('name', 'asc')->get()->pluck('id', 'name');
            Cache::put('api.states', $val, 60);
            return $val;
        });
    }

    public function cities($id)
    {

        return Cache::get('api.cities.' . $id, function() use ($id) {
            $val = City::where('state_id', $id)->orderBy('order', 'desc')->orderBy('name', 'asc')->get()->pluck('id', 'name');
            Cache::put('api.cities.' . $id, $val, 60);
            return $val;
        });
    }

    public function neighborhoods($id)
    {

        return Cache::get('api.neighborhoods.' . $id, function() use ($id) {
            $val = Neighborhood::where('city_id', $id)->orderBy('order', 'desc')->orderBy('name', 'asc')->get()->pluck('id', 'name');
            Cache::put('api.neighborhoods.' . $id, $val, 60);
            return $val;
        });
    }
}

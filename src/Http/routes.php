<?php

Route::group(['prefix' => 'api'], function () {
    Route::get('/states', ['uses' => 'ApiController@states',  'as' => 'api.states']);
    Route::get('/cities/{state}', ['uses' => 'ApiController@cities',  'as' => 'api.cities']);
    Route::get('/neighborhoods/{city}', ['uses' => 'ApiController@neighborhoods',  'as' => 'api.neighborhoods']);
});
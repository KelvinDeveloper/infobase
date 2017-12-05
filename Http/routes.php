<?php

Route::group(['middleware' => 'web', 'prefix' => 'infobase', 'namespace' => 'Modules\InfoBase\Http\Controllers'], function()
{
    Route::get('/', 'InfoBaseController@index');
});

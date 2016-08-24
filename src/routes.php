<?php

Route::group(['namespace' => 'Arbitrium\Lend\Controllers', 'prefix' => 'arbitrium/lend'], function () {
    Route::get('/', ['as' => 'lend_path', 'uses' => 'LendController@index']);
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group (array ('prefix' => '/v1'),
	function () {
		Route::resource('files', 'FileController');
	}
);

Route::group (array ('prefix' => '1'), function () {

    // [GET] :: /1/upload/upload-test
    Route::get('upload/upload-test', 'UploadController@testUpload');

    Route::resource('upload', 'UploadController');

});
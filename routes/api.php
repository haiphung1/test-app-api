<?php



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'projects'], function () {
    Route::get('/', 'ProjectController@index');
    Route::post('store', 'ProjectController@store');
    Route::put('update/{id}', 'ProjectController@update');
});
Route::group(['prefix' => 'members'], function () {
    Route::post('store', 'MemberController@store');
});

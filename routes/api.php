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
    Route::get('{id}/edit', 'projectController@edit');
    Route::put('update/{id}', 'ProjectController@update');
    Route::delete('{id}/destroy', 'ProjectController@destroy');
});
Route::group(['prefix' => 'members'], function () {
    Route::get('/', 'MemberController@index');
    Route::post('store', 'MemberController@store');
    Route::get('{id}/show', 'MemberController@show');
    Route::put('{id}/update', 'MemberController@update');
    Route::delete('{id}/destroy', 'MemberController@destroy');
});
Route::group(['prefix' => 'joins'], function () {
    Route::post('store', 'JoinController@store');
    Route::get('{id}/show', 'JoinController@show');
    Route::delete('{id}/destroy', 'JoinController@destroy');
    Route::get('member', 'JoinController@member');
    Route::put('{id}/update', 'JoinController@update');
});

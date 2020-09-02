<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'JWTAuthController@register');
    Route::post('login', 'JWTAuthController@login');
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::get('profile', 'JWTAuthController@profile');

});

Route::group([
    'prefix' => 'v1/public'
], function ($router) {
    Route::get('characters', 'CharacterController@characters');
    Route::get('characters/{characterId}', 'CharacterController@character');
    Route::get('characters/{characterId}/comics', 'CharacterController@comics');
    Route::get('characters/{characterId}/events', 'CharacterController@events');
    Route::get('characters/{characterId}/series', 'CharacterController@series');
    Route::get('characters/{characterId}/stories', 'CharacterController@stories');
});

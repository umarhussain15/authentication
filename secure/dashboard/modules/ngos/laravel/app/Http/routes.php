<?php

use App\Ngo;
use App\Cause;
use App\Item;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('ngo', function($value)
{
  return Ngo::where('user_id', $value)->first();
});

Route::bind('cause', function($value)
{
	return Cause::where('cause_id', $value)->first();
});

Route::bind('item', function($value)
{
	return Item::where('item_id', $value)->first();
});

Route::get('/', 'NgoController@index');
Route::get('/{ngo}', 'NgoController@ngoView');
Route::get('/cause/{cause}', 'NgoController@causeView');
Route::get('/causes/all', 'NgoController@viewAll');
Route::get('/{ngo}/contact-us', 'NgoController@contactView');
Route::post('/{ngo}/contact-us/message', 'NgoController@storeMessage');

Route::get('/auth/login', 'MyAuthController@getLogin');
// Route::get('/auth/login', 'MyAuthController@getLogin');
// Route::post('/auth/login', 'MyAuthController@postLogin');
Route::get('/auth/logout', 'MyAuthController@getLogout');
Route::post('/auth/login', 'MyAuthController@postLogin');

Route::get('/auth/register', 'MyAuthController@getRegister');
// Route::get('/auth/register', 'MyAuthController@getRegister');
Route::post('/auth/register', 'MyAuthController@postRegister');
// Route::post('/auth/register', 'MyAuthController@postRegister');

Route::get('/author/{ngo}', 'NgoAuthorController@index');
Route::get('/author/cause/{cause}', 'NgoAuthorController@update');
Route::post('/update/cause/{cause}', 'NgoAuthorController@store');
Route::post('/add/cause/{ngo}', 'NgoAuthorController@storeCause');
Route::get('/author/{ngo}/message', 
	'NgoAuthorController@messageView');
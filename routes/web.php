<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {}

Route::get('/', function () {
	Log::error('my-error');
	Log::info('bıdı bıdı');
	throw new Exception('error testing');

});

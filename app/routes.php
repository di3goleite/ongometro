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

// home page (app/views/home.blade.php)
Route::get('/{situacao?}', function($situacao = 34)
{
	return View::make('home');
});

// about page (app/views/about.blade.php)
Route::get('about', function()
{
	return View::make('about');
});

// team page (app/views/team.blade.php)
Route::get('team', function()
{
	return View::make('team');
});

// ong page (app/views/ong.blade.php)
Route::get('ong/{estado}/{situacao}', function($estado, $situacao)
{
	return View::make('ong');
});

// convenio page (app/views/convenio.blade.php)
Route::get('convenio/{id}', function($id)
{
	return View::make('convenio');
});
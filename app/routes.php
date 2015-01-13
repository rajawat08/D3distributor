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

/*Route::get('/', function()
{
	return View::make('hello');
});*/
/**
 * UsersController
 */

// admin panel routing
Route::group(['prefix' => 'admin', 'namespace' => 'Pingpong\Admin\Controllers'], function ()
{
    Route::group(['before' => 'admin.guest'], function ()
    {
        Route::resource('login', 'LoginController', ['only' => ['index', 'store']]);
    });

    Route::group(['before' => 'admin.auth'], function ()
    {
        Route::get('/', ['as' => 'admin.home', 'uses' => 'SiteController@index']);
        Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'SiteController@logout']);

        // settings
        Route::get('settings', ['as' => 'admin.settings', 'uses' => 'SiteController@settings']);
        Route::post('settings', ['as' => 'admin.settings.update', 'uses' => 'SiteController@updateSettings']);

        // app
        $options = ['except' => ['show']];

        Route::resource('articles', 'ArticlesController', $options);
        Route::resource('pages', 'ArticlesController', $options);
        Route::resource('users', 'UsersController', $options);
        Route::resource('categories', 'CategoriesController', $options);
        Route::resource('roles', 'RolesController', $options);
        Route::resource('permissions', 'PermissionsController', $options);
		Route::resource('products','ProductsController');

        // backup & reset
        Route::get('backup/reset', ['as' => 'admin.reset', 'uses' => 'SiteController@reset']);
        Route::get('app/reinstall', ['as' => 'admin.reinstall', 'uses' => 'SiteController@reinstall']);
        Route::get('cache/clear', ['as' => 'admin.cache.clear', 'uses' => 'SiteController@clearCache']);
    });
});
// front end site or no admin member routing.
Route::group(array('prefix' => 'users'), function()
{
 Route::controller('/home', 'HomeController');
 Route::controller('/', 'UsersController');
 
});
 //UploadsController
Route::controller('/uploads', 'UploadsController');
Route::controller('/ajax', 'AjaxController');

Route::get('/search', ['as' => 'user.search', 'uses' => 'IndexController@getSearch']);
//Route::resource('/categories', 'CategoriesController');
Route::get('/{cat}', ['as' => 'category', 'uses' => 'CategoriesController@show']);
Route::get('/{cat}/{product}', ['as' => 'product', 'uses' => 'ProductsController@show']);



Route::controller('/', 'IndexController');



<?php

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
/*Route::get('/upload', ['as' => 'image.create', 'uses' => 'ImageController@create']);
Route::post('/upload', ['as' => 'image.store' , 'uses' => 'ImageController@store']);*/

Route::get('layout',function () {
    return view('backend.blog.new_blog');
});
Route::get('/',function () {
    return view('index');
});
Route::get('event/new','EventGalleryController@create');
Route::post('event/new','EventGalleryController@store');

Route::get('event/gallery','ImageController@create');
Route::post('event/gallery','ImageController@store');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/blog/new', 'BlogController@new_blog');

Route::post('/store','BlogController@store');

Route::group(['middleware'=>['auth']],function(){
});

get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

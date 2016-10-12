
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

Route::get('upload', ['as' => 'image.create', 'uses' => 'ImageController@create']);
Route::post('upload', ['as' => 'image.store' , 'uses' => 'ImageController@store']);
Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);
/*Route::get('/upload', ['as' => 'image.create', 'uses' => 'ImageController@create']);
Route::post('/upload', ['as' => 'image.store' , 'uses' => 'ImageController@store']);*/


Route::get('layout',function () {
    return view('backend.blog.new_blog');
});

Route::get('blog/list',function () {
    return view('backend.blog.list_blog');
});


Route::get('/',function () {
    return view('index');
});

Route::auth();

Route::get('home', 'HomeController@index');


Route::get('blog/new', 'BlogController@new_blog');

Route::post('blog/store','BlogController@store');

Route::group(['middleware'=>['auth']],function(){
});


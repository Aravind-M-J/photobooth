
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

Route::get('blog/list','BlogController@index');
Route::get('blog/destroy/{id}','BlogController@destroy');

Route::get('blog/edit/{id}','BlogController@edit');
Route::post('blog/edit/{id}','BlogController@update');

Route::get('blog/new', 'BlogController@new_blog');

Route::post('blog/store','BlogController@store');

Route::get('/blog/new', 'BlogController@new_blog');
Route::get('/blog/list',function () {
    return view('backend.blog.list_blog');
});


Route::post('/blog/store','BlogController@store');
 
Route::resource('blog', 'BlogController');

Route::group(['middleware'=>['auth']],function(){
});



//get('/auth/l ogin', 'Auth\AuthController@getLogin');
//post('/auth/login', 'Auth\AuthController@postLogin');
//get('/auth/logout', 'Auth\AuthController@getLogout');


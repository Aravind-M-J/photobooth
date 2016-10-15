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

# Event gallery Routes
Route::get('event/new','EventGalleryController@create');
Route::post('event/new','EventGalleryController@store');
Route::get('event','EventGalleryController@index');
Route::get('event/destroy/{id}','EventGalleryController@destroy');
Route::get('event/gallery/{eventid}',['as'=>'image.create','uses'=>'ImageController@create']);
Route::post('event/gallery',['as'=>'image.store','uses'=>'ImageController@store']);

# Authentication Route
Route::auth();

# Front End Views Routes
Route::get('/home', 'HomeController@index');
Route::get('/','HomeController@root');
Route::get('aboutUs',function () {
    return view('frontend.about');
});
Route::get('contactUs',function () {
    return view('frontend.contact');
});
Route::get('Events',function () {
    return view('frontend.events');
});
Route::get('Blog',function () {
    return view('frontend.blog');
});
Route::get('Gallery',function () {
    return view('frontend.gallery');
});

# Blog Routes
Route::get('blog/new', 'BlogController@new_blog');
Route::get('blog/{id}', 'BlogController@show');
Route::get('blog/list',function () {
    return view('backend.blog.list_blog');
});
Route::post('blog/store','BlogController@store');

# Routes that only admin can access
Route::group(['middleware'=>['auth']],function(){
    # Change password routes
    Route::get('changePassword','Password@changePassword');
    Route::post('changePassword','Password@changePasswordProcess');
});


//Route::get('/home', 'HomeController@index');
Route::get('Gallery/{id}',['uses'=>'HomeController@gallery']);


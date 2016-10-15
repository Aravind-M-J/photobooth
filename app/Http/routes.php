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


# Authentication Route
Route::auth();

# Front End Views Routes
Route::get('/','HomeController@root');
Route::get('aboutUs',function () {
    return view('frontend.about');
});
Route::get('contactUs',function () {
    return view('frontend.contact');
});
Route::get('Events','HomeController@events');
Route::get('Blogs','HomeController@blogs');
Route::get('Blog/{id}','BlogController@show');
Route::get('Gallery/{id}',['uses'=>'HomeController@gallery']);
Route::get('contactUs','AboutController@create');
Route::post('contactUs','AboutController@store');

# Routes that only admin can access
Route::group(['middleware'=>['auth']],function(){
    # Dashboard
    Route::get('/home', 'HomeController@index');

    # Event gallery Routes
    Route::get('event/new','EventGalleryController@create');
    Route::post('event/new','EventGalleryController@store');
    Route::get('event','EventGalleryController@index');
    Route::get('event/destroy/{id}','EventGalleryController@destroy');
    Route::get('event/gallery/{eventid}',['as'=>'image.create','uses'=>'ImageController@create']);
    Route::post('event/gallery',['as'=>'image.store','uses'=>'ImageController@store']);
    Route::post('toggle/{id}','ImageController@toggle');
    Route::post('caption/{id}','ImageController@caption');
    Route::get('event/edit/{id}','EventGalleryController@edit');
    Route::post('event/edit/{id}','EventGalleryController@update');

    # Blog Routes
    Route::get('blog', 'BlogController@new_blog');
    Route::get('blog/new', 'BlogController@new_blog');
    Route::get('blog/list','BlogController@index');
    Route::get('blog/{id}', 'BlogController@show');
    Route::post('blog/store','BlogController@store');
    Route::get('blog/destroy/{id}','BlogController@destroy');
    Route::get('blog/edit/{id}','BlogController@edit');
    Route::post('blog/edit/{id}','BlogController@update');

    # Change password routes
    Route::get('changePassword','Password@changePassword');
    Route::post('changePassword','Password@changePasswordProcess');
});

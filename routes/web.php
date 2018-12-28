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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
//	Route::get('/', 'HomeController@index');
//});
/*
Route::resource('users', 'UsersController');

上面代码将等同于：

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/{user}', 'UsersController@show')->name('users.show');

Route::get('/users/create', 'UsersController@create')->name('users.create');

Route::post('/users', 'UsersController@store')->name('users.store');

Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

Route::patch('/users/{user}', 'UsersController@update')->name('users.update');

Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy'); 


 * 
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('/', 'HomeController@index');
	Route::resource('articles', 'ArticleController');
	Route::post('articles/edit_update', 'ArticleController@edit_update');
	Route::get('welcome/', 'WelcomeController@index');
	
});


Route::get('article/{id}', 'ArticleController@show');
Route::get('article/{id}/add_star', 'ArticleController@add_star');

Route::post('comment', 'CommentController@store');

Route::get('aboutme/', 'AboutmeController@index');
Route::get('info/', 'InfoController@index');
Route::get('list/', 'ListController@index');
Route::get('share/', 'ShareController@index');


Route::get('study/', 'StudyController@index');
Route::get('study/{id}', 'StudyController@index');

Route::get('time/', 'TimeController@index');
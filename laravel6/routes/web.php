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
    return view('layout');
});


Route::get('/hello', function () {
    return view ('hello', ['name' => 'DTA', 'msg' => 'Ciaos']);
});

Route::get('/hello/{name}', function ($name) {
    return view ('hello', ['name' => $name, 'msg' => 'Ciaos']);
});

Route::get('/hello_array', function() {
    return view('hello_array', ['names' => ['Hugues', 'Joey', 'Carlson', 'Henri']]);
});

Route::get('/student/{firstname}/{lastname}', 'StudentController@index');


Route::get('hello_with_param', 'HandleParameterController@sayHello');

Route::get('createUser', 'CreateUserController@displayForm');

Route::post('createUser', 'CreateUserController@handleForm')->name('PostCreateUser');

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');

Route::get('hello_with_session/{name}', 'HandleSessionController@sayHello');

Route::get('users', 'UsersController@list');

Route::get('users/{id}', 'UsersController@show');

Route::get('contacts', 'ContactsController@list');

Route::get('contacts/{id}', 'ContactsController@show');

Route::get('comments', 'CommentsController@create');

Route::get('films', 'FilmController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

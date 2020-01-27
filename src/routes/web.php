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
Route::get("/hello", function () {
    print("<h1>Hello World!</h1>");
    return null;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', 'TestController@hoge');

Route::get('/main', function () {
    return view('main');
});
Route::get('/search', 'SearchController@index');

Route::get('paginate', 'SearchController@index')->name('main');

Route::get('/search_result', function () {
    return view('search_result');
});

Route::resource('members', 'MembersController')->only([
    'index', 'store', 'edit', 'update', 'destroy'
]);


// Route::get('/top', 'TopController@show');
// Route::post('/top2', 'TopController@regist');

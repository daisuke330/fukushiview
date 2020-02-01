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

Route::get('/index', function () {
    return view('index');
});
Route::get('/search', 'SearchController@index');

Route::get('paginate', 'SearchController@index')->name('main');

Route::get('/search_result', function () {
    return view('search_result');
});

Route::get('/office_info', function () {
    return view('office_info');
});

Route::resource('members', 'MembersController')->only([
    'index', 'store', 'edit', 'update', 'destroy'
]);

Route::resource('offices', 'OfficesController')->only([
    'index', 'store', 'edit', 'update', 'destroy'
]);

Route::get('/insert_reviews', function () {
    return view('insert_reviews');
});

Route::resource('insertreviews', 'InsertReviewsController')->only([
    'index', 'store', 'edit', 'update', 'destroy'
]);

Route::resource('officeinfo', 'OfficeInfoController')->only([
    'index', 'store', 'edit', 'update', 'destroy'
]);


// Route::get('/top', 'TopController@show');
// Route::post('/top2', 'TopController@regist');

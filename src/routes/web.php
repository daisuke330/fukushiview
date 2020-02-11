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

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', 'TestController@hoge');

Route::get('/index', function () {
    return view('index');
});
Route::get('/search', 'SearchController@index');

Route::get('paginate', 'SearchController@index')->name('index');

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

Route::get('/officeinfo/{id}', 'OfficeInfoController@index')->name('officeinfo.index');
Route::get('/insertreviews/{id}', 'InsertReviewsController@index')->name('insertreviews.index');
Route::post('/insertreviews/{office_id}', 'InsertReviewsController@store')->name('insertreviews.store');

Route::get('/review_verification', function () {
    return view('review_verification');
});

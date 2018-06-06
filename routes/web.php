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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(["middleware" => ["auth"]], function() {
    Route::resource('programs', 'ProgramController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('students', 'StudentController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('courses', 'CourseController', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);

});

Route::resource('programs', 'ProgramController', ['only' => ['index', 'show']]);
Route::resource('students', 'StudentController', ['only' => ['index', 'show']]);
Route::resource('courses', 'CourseController', ['only' => ['index', 'show']]);

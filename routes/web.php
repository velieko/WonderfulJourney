<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 
    function () {
        $blog = \App\Article::All();
        $cat = \App\Category::All();
    return view('welcome',['bacaan'=>$blog, 'genre'=>$cat]);
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userlist', 'UserlistController@index')->middleware('adminpriv');
Route::get('/userlist/delete/{id}', 'UserlistController@destroy')->middleware('adminpriv');
Route::put('/userlist/update/{id}', 'UserlistController@update')->middleware('adminpriv');

Route::get('profil/{id}','UserlistController@landing')->middleware('userpriv');
Route::get('/blog/{id}','BlogController@index')->middleware('userpriv');
Route::get('/blog/add/{id}', 'BlogController@createform')->middleware('userpriv');
Route::post('/blog/create/{id}', 'BlogController@create')->middleware('userpriv');
Route::get('/blog/delete/{id}', 'BlogController@destroy')->middleware('userpriv');

Route::get('/category/{id}','CategoryController@index');
Route::get('/show/{id}','ShowController@index');
Route::get('/about', 'AboutController@index');



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
    return view('HomePage')->with([session('error')=>null]);
});

Route::group(['namespace'=>'Students'],function (){

    Route::post('/login','StudentsController@login')->name('login');
    Route::post('/login_process','StudentsController@login_process')->name('login_process');

});

Route::group(['namespace'=>'Auth'],function (){
    Route::post('/login','LoginController@login')->name('login');
});
Route::get('/reset','HomeController@reset')->name('reset');

Route::post('/resets','HomeController@resets')->name('resets');

Route::get('/logout','HomeController@Logout')->name('logout');

Route::get('/find','HomeController@findPassword')->name('findPassword');

Route::post('/resetPassword','HomeController@resetPassword')->name('resetPassword');

Route::get('/checkMail/{mail}','HomeController@checkMail')->name('checkMail');

Route::get('/checkNumber/{number}','HomeController@checkNumber')->name('checkNumber');

Route::get('admin_login','Admin\AdminController@admin_login')->name('admin_login');

Route::get('/AdminHome', 'Admin\AdminController@getHome')->name('adminHome');

Route::get('/admin_out','Admin\AdminController@admin_out')->name('admin_logout');

Route::post('/addNews','Admin\AdminController@addNews')->name('addNews');

Route::post('/checkNews','Admin\AdminController@checkNews')->name('checkNews');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

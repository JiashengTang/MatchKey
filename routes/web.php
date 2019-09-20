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

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin',function(){
    return view('admin');
});

Route::get('/user',function(){
    return view('user');
});

Route::get('/add-user',function(){
    return view('adminview/add-user');
});
Route::get('/delete-user',function(){
    return view('adminview/delete-user');
});
Route::get('/search-user',function(){
    return view('adminview/search-user');
});
Route::get('/show-all-user',function(){
    return view('adminview/show-all-user');
});
Route::get('/seekersearch',function(){
    return view('seekersearch');
});
Route::get('/recruiterpost',function(){
    return view('recruiterpost');
});

Route::get('logout', 'LoginFunctionController@logout')
      ->name('logout');

Route::post('/welcome/submit', 'LoginFunctionController@submit');

Route::post('/register/submit', 'RegisterFunctionController@submit');

Route::post('/add-user/submit', 'AdduserFunctionController@submit');

Route::get('/view', 'LoginFunctionController@submit');

Route::get('/show-all-user', 'AdminFunctionController@getuserinfo');

Route::post('/recruiterpost/submit', 'RecruiterpostFunctionController@submit');

Route::post('/seekersearch/submit', 'seekersearchFunctionController@submit');
//Route::redirect('/welcome/submit', '/view');
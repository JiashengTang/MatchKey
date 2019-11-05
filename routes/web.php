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
Route::get('/user/verify/{token}', 'RegisterFunctionController@verifyUser');

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin',function(){
    return view('admin');
});

Route::get('/user',function(){
    return view('user');
});

Route::get('/created',function(){
    return view('createdjob');
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
Route::get('/searchresult',function(){
    return view('searchresult');
});
Route::get('/forgotpw',function(){
    return view('forgotpw');
});
Route::get('/enterverificationcode',function(){
    return view('enterverificationcode');
});
Route::get('/sendmessage',function(){
    return view('sendmessage');
});
Route::get('/message',function(){
    return view('Message');
});
Route::get('/inbox',function(){
    return view('inbox');
});
Route::get('/sent',function(){
    return view('sent');
});
Route::get('/editjob',function(){
    return view('editjob');
});

Route::get('/NavbarSearch',function(){
    return view('NavbarSearch');
});

Route::get('logout', 'LoginFunctionController@logout')
      ->name('logout');

Route::post('seekersearch/fillfirst', 'seekersearchFunctionController@fillfirst');

Route::post('seekersearch/show', 'seekersearchFunctionController@show');

Route::post('/welcome/submit', 'LoginFunctionController@submit');

Route::post('/register/submit', 'RegisterFunctionController@submit');

Route::post('/add-user/submit', 'AdduserFunctionController@submit');

Route::post('/forgetpw/submit', 'ForgotPasswordFunctionController@submit');

Route::post('/enterverificationcode/submit', 'EnterverificationcodePasswordFunctionController@submit');

Route::get('/view', 'LoginFunctionController@submit');

Route::get('/show-all-user', 'AdminFunctionController@getuserinfo');

Route::get('/created', 'ShowcreatedjobFunctionController@getalljobinfo');

Route::get('/inbox', 'MessageFunctionController@inbox');

Route::get('/sent', 'MessageFunctionController@sent');

Route::get('/searchresult/get/{jobid}', 'searchresultFunctionController@getjobid');

Route::get('/sendmessage/get/{i}', 'sendmessageFunctionController@reply');

Route::get('/editjobs/get/{jobid}', 'ShowcreatedjobFunctionController@geteditjobinfo');

Route::get('/recruitmentinformation', 'RecruiterpostFunctionController@recruitmentinformation');
//Route::post('/search-user/submit', 'SearchFunctionController@submit');

Route::post('/recruiterpost/submit', 'RecruiterpostFunctionController@submit');

Route::post('/seekersearch/submit', 'seekersearchFunctionController@submit');

Route::post('/searchresult/submit', 'searchresultFunctionController@submit');

Route::post('/editjobs/submit', 'ShowcreatedjobFunctionController@submit');

Route::post('/sendmessage/submit', 'sendmessageFunctionController@submit');
//Route::redirect('/welcome/submit', '/view');
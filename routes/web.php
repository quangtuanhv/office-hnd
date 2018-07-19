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
// user đăng ký đăng nhập
Route::get('/register',function(){
    return view('user.register');
});
Route::post('/post-register','UserController@postRegister');
Route::get('/login', function() {
    return view('user.login');
})->name('login');
Route::post('/post-login','UserController@postLogin');



Route::group(['middleware'=>'auth'],function(){
    

    Route::get('/', function () {
        return view('master.home');
    });
    Route::get('/contact', 'ContactController@showContact');
    Route::get('/document-receive', function () {
        return view('documents.doc-receive');
    });
    Route::get('/detail-document', function() {
        return view('documents.detail');
    });
    Route::get('/profile', function() {
        return view('user.profile');
    });

    Route::get('/logout','UserController@logout');
    //lịch cá nhân
     
    Route::get('events', 'EventController@index')->name('events.index');
    Route::post('events', 'EventController@addEvent')->name('events.add');
 
});
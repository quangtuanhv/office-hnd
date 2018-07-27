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
    
    
    Route::get('/profile', 'UserController@showProfile');
    Route::post('/update-profile', 'UserController@updateProfile');
    Route::post('/change-password','UserController@changePassword');


    Route::get('/logout','UserController@logout');
    //lịch cá nhân     
    Route::get('events', 'EventController@index')->name('events.index');
    Route::post('events', 'EventController@addEvent')->name('events.add');
    Route::get('personal-schedule/{id?}','EventController@showDetailEvent');
    Route::get('/delete-event/{id?}','EventController@deleteEvent');
    //Lịch phòng ban
    Route::get('events-suite', 'CalendarSuiteController@index')->name('calendars.index');
    Route::post('events-suite', 'CalendarSuiteController@addEvent')->name('calendars.add');
    Route::get('calendar-suite/{id?}','CalendarSuiteController@showDetailEvent');
    Route::get('/delete-calendar-suite/{id?}','CalendarSuiteController@deleteEvent');


    //cái luồng đi văn bản làm anh cảm thấy thật đờ mờ
    //new một văn bản
    Route::get('/new-document', function(){
        return view('documents.new-document');
    });
    Route::post('new-document', 'DocumentController@addDocument');
    Route::get('/document-receive','DocumentController@showDocument');
    Route::get('/detail-document/{id?}','DocumentController@showDetailDocument')->name('detail-document');

    Route::get('/forward-document/{id?}', 'DocumentController@getPageFoward');
    Route::post('/forward-document/{id?}','DocumentController@saveStateDocument');

    Route::get('/sub-handle-document/{id?}', 'DocumentController@getSubHandler');
    Route::post('/handle-document/{id?}', 'DocumentController@postSubHandler');

    Route::post('comment-document/{id?}','DocumentController@postComment');

    Route::get('/document-send','DocumentController@showDocumentSend');
});
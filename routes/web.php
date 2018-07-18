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


Route::get('login', function() {
    return view('user.login');
});

Route::get('/', function () {
    return view('master.home');
});
Route::get('/contact', function () {
    return view('contact.contact');
});
Route::get('/document-receive', function () {
    return view('documents.doc-receive');
});
Route::get('/detail-document', function() {
    return view('documents.detail');
});
Route::get('/profile', function() {
    return view('user.profile');
});


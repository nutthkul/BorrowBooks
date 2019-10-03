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

Route::get('/addborrow' , 'BorrowController@borrowPage') -> name('add.borrow.page');


Route::get('/time', function() {
    dd('time');
});
Route::get('/som', function() {
    dd('Som');
});
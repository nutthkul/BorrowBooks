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

Route::get('/default' , 'ReturnController@defaultPage')->name('default');


<<<<<<< HEAD
// ###################### Book Route #########################

Route::name('book.')->group(function() {
    Route::get('/add', 'BookController@addIndex')->name('add.index');
    Route::post('/add', 'BookController@add')->name('add');
    Route::get('/book/edit/{id}', 'BookController@editIndex')->name('edit.index');
    Route::post('/book/edit', 'BookController@edit')->name('edit');
    Route::get('/book/delete/{id}', 'BookController@deleteIndex')->name('delete.index');

});

// ###################### Borrow Route #########################

Route::name('borrow.')->group(function() {

    Route::get('/borrow/create', 'BorrowController@createIndex')->name('create.index');
    Route::post('/borrow/create', 'BorrowController@create')->name('create');
    Route::get('/borrow/edit/{id}', 'BorrowController@editIndex')->name('edit.index');
    Route::post('/borrow/edit', 'BorrowController@edit')->name('edit');
    Route::get('/borrow/delete/{id}', 'BorrowController@deleteIndex')->name('delete.index');
=======
Route::get('/dashboard', function () {
>>>>>>> #16-CreateLayouts

});
// ###################### Return Route ########################

<<<<<<< HEAD
<<<<<<<<< Temporary merge branch 1
Route::get('/addborrow' , 'BorrowController@addBorrow') -> name('lib.add.borrow');
=======

Route::name('return.')->group(function() {
>>>>>>> #16-CreateLayouts


Route::get('/time', function() {
    dd('time');
});
Route::get('/som', function() {
    dd('Som');
});
=========
Route::get('/test', function () {
    dd(1);
    return view('welcome');
});

// ###################### XXXX Route ##########################

<<<<<<< HEAD
=======

Route::get('/test', function () {
    dd(1);
    return view('welcome');
});

>>>>>>> #16-CreateLayouts

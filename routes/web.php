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

// ##################### Dashboard Route ########################

Route::get('/' , 'BookController@index') -> name('book.index');

<<<<<<< HEAD
Route::get('/addborrow' , 'BorrowController@borrowPage') -> name('add.borrow.page');
=======
// ###################### Borrow Route #########################
>>>>>>> #13-CreateDefaultRoute

Route::name('borrow.')->group(function() {

    Route::get('/create', 'BorrowController@createIndex')->name('borrow.create.index');
    Route::post('/create', 'BorrowController@create')->name('borrow.create');
    Route::get('/edit/{id}', 'BorrowController@editIndex')->name('borrow.edit.index');
    Route::post('/edit', 'BorrowController@edit')->name('borrow.edit');
    Route::get('/delete/{id}', 'BorrowController@deleteIndex')->name('borrow.delete.index');

});
<<<<<<< HEAD
Route::get('/som', function() {
    dd('Som');
});
=======
// ###################### Return Route ########################

Route::get('/return' , 'ReturnController@returnBookPage') -> name('return.page');


// ###################### Book Route ##########################

Route::name('book.')->group(function() {

    Route::get('/create', 'BookController@createIndex')->name('book.create.index');
    Route::post('/create', 'BookController@create')->name('book.create');
    Route::get('/edit/{id}', 'BookController@editIndex')->name('book.edit.index');
    Route::post('/edit', 'BookController@edit')->name('book.edit');
    Route::get('/delete/{id}', 'BookController@deleteIndex')->name('book.delete.index');

});

// ###################### Manage Librarian Route ##########################

Route::name('librarian.')->group(function() {
    Route::get('/register', 'LibrarianController@regisPage')->name('lib.regis.page');
    Route::post('/register', 'LibrarianController@regis')->name('lib.regis');
    Route::get('/login', 'LibrarianController@loginPage')->name('lib.login.page');
    Route::post('/login', 'LibrarianController@login')->name('lib.login');
    Route::get('/logout', 'LibrarianController@logout')->name('lib.logout');
});

// ###################### XXXX Route ##########################

>>>>>>> #13-CreateDefaultRoute

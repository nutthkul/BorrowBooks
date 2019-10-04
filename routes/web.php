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
<<<<<<< HEAD
// ##################### Dashboard Route ########################

Route::get('/' , 'BookController@index')->name('book.index');


#Route::get('/addborrow' , 'BorrowController@borrowPage') -> name('add.borrow.page');
#Route::post('/add', 'BorrowController@borrower') -> name('add.borrow');

Route::name('borrow.')->group(function() {

    Route::get('/borrow/create', 'BorrowController@createIndex')->name('create.index');
    Route::post('/borrow/create', 'BorrowController@create')->name('create');
    Route::get('/borrow/edit/{id}', 'BorrowController@editIndex')->name('edit.index');
    Route::post('/borrow/edit', 'BorrowController@edit')->name('edit');
    Route::get('/borrow/delete/{id}', 'BorrowController@deleteIndex')->name('delete.index');
=======

Route::get('/dashboard', function () {
>>>>>>> #17-CreateIncludes

});

Route::get('/som', function() {
    dd('Som');
}) -> name('test');

// ###################### Return Route ########################


Route::name('return.')->group(function() {

    Route::get('/return/edit/{id}' , 'ReturnController@editIndex')->name('edit.index');
    Route::post('/return/edit', 'ReturnController@edit')->name('edit');

});


// ###################### Book Route ##########################

Route::name('book.')->group(function() {

    Route::get('/book/create', 'BookController@createIndex')->name('create.index');
    Route::post('/book/create', 'BookController@create')->name('create');
    Route::get('/book/edit/{id}', 'BookController@editIndex')->name('edit.index');
    Route::post('/book/edit', 'BookController@edit')->name('edit');
    Route::get('/book/delete/{id}', 'BookController@deleteIndex')->name('delete.index');

});

// ###################### Manage Librarian Route ##########################

Route::name('librarian.')->group(function() {
    Route::get('/librarian/register', 'LibrarianController@regisPage')->name('regis.page');
    Route::post('/librarian/register', 'LibrarianController@regis')->name('regis');
    Route::get('/librarian/login', 'LibrarianController@loginPage')->name('login.page');
    Route::post('/librarian/login', 'LibrarianController@login')->name('login');
    Route::get('/librarian/logout', 'LibrarianController@logout')->name('logout');
});

// ###################### XXXX Route ##########################
<<<<<<< HEAD


Route::get('/test', function () {
    dd(1);
    return view('welcome');
});

=======
>>>>>>> addFileMigrations

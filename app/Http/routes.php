<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Page d'accueil
 */
Route::get('/', 'HomepageController@welcome')->name('homepage');

/**
 * Liste et création de livres
 */
Route::group(['prefix' => 'book'], function(){
   Route::get('/list', 'BookController@toList')->name('book.list');
   Route::get('/book-listJson', 'BookController@listJson')->name('book.listJson');
   Route::any('/add', 'BookController@add')->name('book.add');
});

/**
 * Liste et création d'auteur'
 */
Route::group(['prefix' => 'author'], function(){
   Route::get('/list', 'AuthorController@toList')->name('author.list');
   Route::get('/author-listJson', 'AuthorController@listJson')->name('author.listJson');
   Route::any('/add', 'AuthorController@add')->name('author.add');
});

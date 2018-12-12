<?php
Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@homepage')->name('home');

Route::get('articles', 'ArticleController@index')->name('get_all_articles');
Route::get('new-article', 'ArticleController@create')->name('create_new_article');
Route::post('articles', 'ArticleController@save')->name('save_new_article');
Route::get('articles/{article}', 'ArticleController@view')->name('view_article');
Route::get('articles/{article}/edit', 'ArticleController@edit')->name('edit_article');
Route::post('articles/{article}/update', 'ArticleController@update')->name('update_article');
Route::get('articles/{article}/delete', 'ArticleController@delete')->name('delete_article');

Route::get('users/{user}', 'UserController@show')->name('show_user_profile');

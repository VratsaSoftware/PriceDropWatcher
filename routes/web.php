<?php

Route::get('/', 'HomeController@index');
Route::get('/article-details/{id}', 'HomeController@getArticleDetails');
Route::get('/category/{id}', 'HomeController@getCategory');

Route::group(['prefix' => 'dashboard'], function() {
    Route::resource('/websites', 'WebsitesController');
    Route::resource('/categories', 'CategoriesController');
    Route::patch('/links/set-item-schema', 'LinksController@setItemSchema');
    Route::post('/links/scrape', 'LinksController@scrape');
    Route::resource('/links', 'LinksController');
    Route::resource('/item-schema', 'ItemSchemaController');
    Route::resource('/articles', 'ArticlesController');
});
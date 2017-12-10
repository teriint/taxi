<?php

Auth::routes();
 Route::get('welcome/{locale}', function ($locale) {
  App::setLocale($locale);

  //
});
Route::get('/', 'PostController@index');
Route::get('about', 'About@index');
Route::get('interests', 'Interests@index');
Route::get('study', 'Study@index');
Route::get('photoalbum', 'PhotoAlbum@index');
Route::get('contact', 'Contact@index');
Route::get('test', 'Test@index');
Route::get('watchHistory', 'WatchHistory@index');
Route::get('guestBook', 'GuestBook@index');
Route::get('/posts', 'PostController@index')->name('list_posts');
Route::group(['prefix' => 'posts'], function () {
    Route::get('/drafts', 'PostController@drafts')
        ->name('list_drafts')
        ->middleware('auth');
    Route::get('/show/{id}', 'PostController@show')
        ->name('show_post');
    Route::get('/create', 'PostController@create')
        ->name('create_post')
        ->middleware('can:create-post');
    Route::post('/create', 'PostController@store')
        ->name('store_post')
        ->middleware('can:create-post');
        
    Route::get('/edit/{post}', 'PostController@edit')
        ->name('edit_post')
        ->middleware('can:update-post,post');
        
    Route::post('/edit/{post}', 'PostController@update')
        ->name('update_post')
        ->middleware('can:update-post,post');
        
        Route::get('/edit-status/{post}', 'PostController@edit_status')
        ->name('edit_status_post')
        ->middleware('can:update-status-post,post');
        
    Route::post('/edit-status/{post}', 'PostController@update_status')
        ->name('update_status_post')
        ->middleware('can:update-status-post,post');
        
        Route::get('/edit-ok/{post}', 'PostController@edit_ok')
        ->name('edit_ok_post')
        ->middleware('can:update-ok-post,post');
        
    Route::post('/edit-ok/{post}', 'PostController@update_ok')
        ->name('update_ok_post')
        ->middleware('can:update-ok-post,post');
    // using get to simplify
    Route::get('/publish/{post}', 'PostController@publish')
        ->name('publish_post')
        ->middleware('can:publish-post');
});

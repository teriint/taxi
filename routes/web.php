<?php

Auth::routes();


Route::get('/', 'PostController@index');
Route::get('/en', 'PostController_en@index');
Route::get('about', 'About@index');
Route::get('interests', 'Interests@index');
Route::get('study', 'Study@index');
Route::get('interests/en', 'Eng@interests');
Route::get('study/en', 'Eng@study');
Route::get('/auth/login_en', 'Controller@logen');
Route::get('/auth/register_en', 'Controller@registra');
Route::get('contact/en', 'Eng@contact');
Route::get('photoalbum', 'PhotoAlbum@index');
Route::get('contact', 'Contact@index');
Route::get('/posts/input', 'Contact@index');
Route::get('test', 'Test@index');
Route::get('watchHistory', 'WatchHistory@index');
Route::get('guestBook', 'GuestBook@index');
Route::get('/posts', 'PostController@index')->name('list_posts');
Route::group(['prefix' => 'posts'], function () {
    Route::get('/drafts', 'PostController@drafts')
        ->name('list_drafts')
        ->middleware('auth');
    Route::get('/drafts/en', 'PostController_en@drafts')
        ->name('list_drafts_en')
        ->middleware('auth');
    Route::get('/show/{id}', 'PostController@show')
        ->name('show_post');
    Route::get('/show_en/{id}', 'PostController_en@show')
        ->name('show_post_en');
    Route::get('/create', 'PostController@create')
        ->name('create_post')
        ->middleware('can:create-post');
    Route::get('/create_en', 'PostController_en@create')
        ->name('create_post_en')
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
        
        
    Route::get('/edit_en/{post}', 'PostController_en@edit')
        ->name('edit_post_en')
        ->middleware('can:update-post,post');
        
    Route::post('/edit_en/{post}', 'PostController_en@update')
        ->name('update_post_en')
        ->middleware('can:update-post,post');
        
        
        
    Route::get('/edit-status/{post}', 'PostController@edit_status')
        ->name('edit_status_post')
        ->middleware('can:update-status-post,post');
        
    Route::get('/edit-status_en/{post}', 'PostController_en@edit_status')
        ->name('edit_status_post_en')
        ->middleware('can:update-status-post,post');
        
    Route::post('/edit-status/{post}', 'PostController@update_status')
        ->name('update_status_post')
        ->middleware('can:update-status-post,post');
        
    Route::post('/edit-status_en/{post}', 'PostController_en@update_status')
        ->name('update_status_post_en')
        ->middleware('can:update-status-post,post');
        
        Route::get('/edit-ok/{post}', 'PostController@edit_ok')
        ->name('edit_ok_post')
        ->middleware('can:update-ok-post,post');
        
     Route::get('/edit-ok_en/{post}', 'PostController_en@edit_ok')
        ->name('edit_ok_post_en')
        ->middleware('can:update-ok-post,post');
        
    Route::post('/edit-ok/{post}', 'PostController@update_ok')
        ->name('update_ok_post')
        ->middleware('can:update-ok-post,post');
        
        Route::post('/edit-ok_en/{post}', 'PostController_en@update_ok')
        ->name('update_ok_post_en')
        ->middleware('can:update-ok-post,post');
    // using get to simplify
    Route::get('/publish/{post}', 'PostController@publish')
        ->name('publish_post')
        ->middleware('can:publish-post');
        
        Route::get('/publish_en/{post}', 'PostController_en@publish')
        ->name('publish_post_en')
        ->middleware('can:publish-post');
          /** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
		Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    	->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
});

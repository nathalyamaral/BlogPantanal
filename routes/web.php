<?php

use App\Notifications\EmailNotification;
//Route::get('{name?}', 'Admin\AdminController@showView');

Auth::routes();


/* --- Rooutes Notifications -- */
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/premiumform', 'HomeController@premium')->name('premium')->middleware('verified');
/* --- End Routes Notifications ---*/

/* --- Rooutes lfm -- */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth', 'roles:admin|editor']], function () {
'\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});
/* --- End Routes lfm ---*/

/* --- Routes Blog --- */
Route::get('/', 'IndexController@index')->name('index');
Route::post('/comments/{post}', 'CommentController@store')->name('comment');
Route::get('/blogsingle{id}', 'PostController@blogsingle')->name('blogsingle');
Route::get('/home', 'PostController@postsession')->name('home');
Route::get('/post/{id}/update', 'PostController@update');
Route::get('/post/{id}/delete', 'PostController@delete');
/* --- End Routes Blog --- */

/* --- Routes ChatBot --- */
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
/* --- End Routes ChatBot --- */

/* --- Routes Dashboard --- */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('login','Admin\Auth\LoginAdminController@showLoginForm')->name('formLoginAdmin');
    Route::post('login','Admin\Auth\LoginAdminController@login')->name('loginAdmin');
    
    /* --- Routes Dashboard --- */
    Route::group(['middleware' => ['auth', 'roles:editor|admin']], function () {
        Route::get('home', 'Admin\AdminController@index')->name('home');
        Route::get('logout', 'Admin\AdminController@getLogout')->name('logout');
        Route::get('profile', 'UserProfileController@index')->name('profile');
        Route::get('gallery', 'Admin\AdminController@gallery')->name('gallery');
        Route::get('calendar', 'Admin\AdminController@calendar')->name('calendar');
        Route::get('login/locked', 'Admin\Auth\LoginAdminController@locked')->name('locked');
        Route::post('login/locked', 'Admin\Auth\LoginAdminController@unlock')->name('login.unlock');

    });
    /* --- End Routes Dashboard --- */

    /* --- Profile User --- */
    Route::group(['middleware' => ['auth']], function () {
        Route::get('profile', 'UserProfileController@index')->name('profile');
        Route::get('update/profile', 'UserProfileController@edit')->name('accountSettings');
        Route::put('user/update', 'UserProfileController@update')->name('updateProfile');
    });
    /* --- End Profile User --- */

    /* --- Routes Filemanager --- */
    Route::group(['middleware' => ['auth', 'roles:editor|admin']], function () {
        Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload'); 
    });
    /* --- End Routes Filemanager --- */
    
    /* --- List|Create|Delete|Update POST --- */
    Route::group(['middleware' => ['auth', 'roles:admin|editor']], function () {
        Route::get('posts', 'PostController@index')->name('posts');
        Route::get('post/create', 'PostController@create')->name('form-add-post');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('post/{id}/edit', 'PostController@edit')->name('form-edit-post');
        Route::put('post/{id}/update', 'PostController@update')->name('update');
        Route::delete('post/delete/{id}', 'PostController@destroy');
        Route::get('postsdeleted', 'PostController@indexPostsDeleted')->name('postsdeleteds');
        Route::delete('post/delete/permanent/{id}', 'PostController@destroyPostPermanent');
        Route::post('post/restore/{id}', 'PostController@restorePost');
        
    }); 
    /* --- End Create|Delete|Update POST --- */

    /* ---List|Create|Delete|Update USER --- */
    Route::group(['middleware' => ['auth', 'roles:admin']], function () {
        Route::get('users', 'UserController@index')->name('users');
        Route::get('user/create', 'UserController@create')->name('form-add-user');
        Route::post('create', 'UserController@store')->name('userStore');
        Route::get('user/{id}/edit', 'UserController@edit')->name('form-edit-user');
        Route::put('user/{id}/update', 'UserController@update')->name('updateUser');
        Route::delete('user/delete/{id}', 'UserController@destroy');
        Route::get('usersdeleted', 'UserController@indexUsersDeleted')->name('deleteds');
        Route::delete('user/delete/permanent/{id}', 'UserController@destroyUserPermanent');
        Route::post('user/restore/{id}', 'UserController@restoreUser');
        Route::get('user/{id}/profile', 'UserProfileController@show')->name('profileshow');
    }); 
    /* --- End List|Create|Delete|Update user --- */

    /* --- Send Emails --- */
    Route::group(['middleware' => ['auth', 'roles:admin']], function () {
        Route::get('email/inbox', 'MailController@inbox')->name('inbox');
        Route::get('email/compose', 'MailController@compose')->name('compose');
        Route::post('email/send', 'MailController@send')->name('enviar');
    }); 
    /* --- End Send Emails --- */



});
/* --- End Routes Dashboard ---*/



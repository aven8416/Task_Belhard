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

Route::group (['middleware' =>['web']], function (){
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'

    ]);
    Route::get('/dashboard', [
        'uses' => 'CommentController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'


    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'

    ]);

    Route::post('/createcomment', [
        'uses' => 'CommentController@postCreateComment',
        'as' => 'createcomment',
        'middleware' => 'auth'

    ]);
    Route::get('/comment-delete/{comment_id}', [
        'uses' => 'CommentController@deleteComment',
        'as' => 'commentdelete',
        'middleware' => 'auth'

    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout',


    ]);




});
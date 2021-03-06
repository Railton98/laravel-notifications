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

Route::get('/', function () {
    return view('welcome');
});

Broadcast::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'Posts\PostController');
Route::post('comment', 'Posts\CommentController@store')->name('comment.store');
// Route::resource('posts.comments', 'Posts\CommentController');

Route::put('notification-all-read', 'NotificationController@markAllAsRead');
Route::put('notification-read', 'NotificationController@markAsRead');
Route::get('notifications', 'NotificationController@notifications')->name('notifications');

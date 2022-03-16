<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace'=>'Main'], function(){
    Route::get('/', 'IndexController')->name('blog');
});

Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => ['auth', 'verified']], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('user.main.index');
    });
    Route::group(['namespace' => 'Like', 'prefix' => 'likes'], function(){
        Route::get('/', 'IndexController')->name('user.likes.index');
        Route::delete('/{post}', 'DeleteController')->name('user.likes.delete');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function (){
        Route::get('/', 'IndexController')->name('user.comments.index');
        Route::get('/{comment}', 'ShowController')->name('user.comments.show');
        Route::get('/{comment}/edit', 'EditController')->name('user.comments.edit');
        Route::patch('/{comment}/update', 'UpdateController')->name('user.comments.update');
        Route::delete('/{comment}', 'DeleteController')->name('user.comments.delete');
    });
});

Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function (){
    Route::get('/', 'IndexController')->name('posts.index');
    Route::get('/{post}', 'ShowController')->name('posts.show');

    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function(){
        Route::post('/{post}', 'StoreController')->name('post.comment.store');
    });
    Route::group(['namespace' => 'Like', 'prefix' => 'like'], function (){
        Route::post('/{post}', 'StoreController')->name('post.like.store');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', 'IndexController')->name('admin.index');
    });

    Route::group(['namespace'=>'Post', 'prefix'=>'posts'], function(){
        Route::get('/', 'IndexController')->name('admin.posts.index');
        Route::get('/store', 'CreateController')->name('admin.posts.create');
        Route::post('/', 'StoreController')->name('admin.posts.store');
        Route::get('/show/{post}', 'ShowController')->name('admin.posts.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.posts.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.posts.delete');
        Route::get('/deleted_posts', 'DeletedPostsController')->name('admin.posts.deleted_posts');
        Route::get('/{post_id}/restore', 'RestoreController')->name('admin.posts.restore');
    });

    Route::group(['namespace'=>'Category', 'prefix'=>'categories'], function(){
        Route::get('/', 'IndexController')->name('admin.categories.index');
        Route::get('/store', 'CreateController')->name('admin.categories.create');
        Route::post('/', 'StoreController')->name('admin.categories.store');
        Route::get('/show/{category}', 'ShowController')->name('admin.categories.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.categories.delete');
        Route::get('/deleted_categories', 'DeletedCategoriesController')->name('admin.categories.deleted_categories');
        Route::get('/{category_id}/restore', 'RestoreController')->name('admin.categories.restore');
    });

    Route::group(['namespace'=>'Tag', 'prefix'=>'tags'], function(){
        Route::get('/', 'IndexController')->name('admin.tags.index');
        Route::get('/store', 'CreateController')->name('admin.tags.create');
        Route::post('/', 'StoreController')->name('admin.tags.store');
        Route::get('/show/{tag}', 'ShowController')->name('admin.tags.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tags.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tags.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tags.delete');
        Route::get('/deleted_tags', 'DeletedTagsController')->name('admin.tags.deleted_tags');
        Route::get('/{tag_id}/restore', 'RestoreController')->name('admin.tags.restore');
    });

    Route::group(['namespace'=>'User', 'prefix'=>'users'], function(){
        Route::get('/', 'IndexController')->name('admin.users.index');
        Route::get('/store', 'CreateController')->name('admin.users.create');
        Route::post('/', 'StoreController')->name('admin.users.store');
        Route::get('/show/{user}', 'ShowController')->name('admin.users.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.users.delete');
        Route::get('/deleted_users', 'DeletedUsersController')->name('admin.users.deleted_users');
        Route::get('/{user_id}/restore', 'RestoreController')->name('admin.users.restore');
    });

});

Auth::routes(['verify' => true]);

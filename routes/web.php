<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[
  'uses' => 'FrontEndController@index',
  'as' => 'index'
]);

Route::get('/results',function(){
      $posts = \App\Post::where('title','like', '%'.request('query').'%')->get();

      return view('admin.vendor.results')
        ->with('posts',$posts)
        ->with('title','Search results :'.request('query'))
        ->with('settings',\App\Setting::first())
        ->with('categories',\App\Category::all())
        ->with('query',request('query'));
});

Route::get('/post/{slug}',[
  'uses' => 'FrontEndController@singlePost',
  'as' => 'post.single'
]);

Route::get('/category/{id}',[
  'uses' => 'FrontEndController@category',
  'as' => 'category.single'
]);

Route::get('/tag/{id}',[
  'uses' => 'FrontEndController@tag',
  'as' => 'tag.single'
]);

Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('/home','HomeController@index')->name('home');
    
    Route::get('/categories','CategoriesController@index')->name('categories.index');
    
    Route::get('/categories/create','CategoriesController@create')->name('categories.create');
    Route::post('/categories/update/{id}','CategoriesController@update')->name('categories.update');
    Route::get('/categories/{category}','CategoriesController@show');
    Route::get('/categories/{category}/edit','CategoriesController@edit')->name('categories.edit');
    Route::get('/categories/{category}','CategoriesController@destroy')->name('categories.delete');
    Route::post('/categories','CategoriesController@store');    
    
    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
     
     ]);
     
     Route::post('/post/store', [
         'uses' => 'PostsController@store',
         'as' => 'post.store'
      
      ]);







      Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
      ]);

      Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
      ]);

      Route::get('/posts/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'posts.kill'
      ]);


      Route::get('/posts/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
      ]);

      Route::get('/posts/show/{post}', [
        'uses' => 'PostsController@show',
        'as' => 'post.show'
      ]);

      Route::post('/posts/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
      ]);

      Route::get('/posts/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
      ]);





     Route::get('/post/delete/{id}', [
      'uses' => 'PostsController@destroy',
      'as' => 'post.delete'
   
    ]);



    Route::get('/tags', [
      'uses' => 'TagsController@index',
      'as' => 'tags'
    ]);

    Route::get('/tags/edit/{id}', [
      'uses' => 'TagsController@edit',
      'as' => 'tag.edit'
    ]);

    Route::post('/tags/update/{tag}', [
      'uses' => 'TagsController@update',
      'as' => 'tag.update'
    ]);

    Route::get('/tags/delete/{id}', [
      'uses' => 'TagsController@destroy',
      'as' => 'tag.delete'
    ]);

    Route::get('/tags/create', [
      'uses' => 'TagsController@create',
      'as' => 'tag.create'
    ]);

    Route::post('/tags/store', [
      'uses' => 'TagsController@store',
      'as' => 'tag.store'
    ]);

    Route::get('/user', [
      'uses' => 'UsersController@index',
      'as' => 'users'
  ]);

    Route::get('/user/create', [
    'uses' => 'UsersController@create',
    'as' => 'user.create'
    ]);

   Route::post('/user/store', [
    'uses' => 'UsersController@store',
    'as' => 'user.store'
   ]);

   Route::get('/user/admin/{id}', [
    'uses' => 'UsersController@admin',
    'as' => 'user.admin'
    ])->middleware('admin');
    Route::get('/user/not-admin/{id}', [
      'uses' => 'UsersController@not_admin',
      'as' => 'user.not.admin'
    ]);
    Route::get('user/profile', [
      'uses' => 'ProfilesController@index',
      'as' => 'user.profile'
    ]);

    Route::get('user/delete/{id}', [
      'uses' => 'UsersController@destroy',
      'as' => 'user.delete'
    ]);

    Route::post('/user/profile/update', [
      'uses' => 'ProfilesController@update',
      'as' => 'user.profile.update'
    ]);

    Route::get('/settings', [
      'uses' => 'SettingsController@index',
      'as' => 'settings'
    ]);

    Route::post('/settings/update', [
      'uses' => 'SettingsController@update',
      'as' => 'settings.update'
    ]);


   });


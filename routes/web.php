<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('contacts', 'ContactsController')->only('create', 'index', 'store');
Route::resource('galleries', 'GalleriesController')->only('create', 'index', 'store');
Route::resource('posts', 'PostsController')->only('create', 'index', 'store');
Route::resource('comments', 'CommentsController');
Route::post('/reply/store', 'CommentsController@show')->name('reply.add');


Route::get('/contactus', 'ContactsController@ContactPage')->name('contactus.index');
Route::get('/ourgallery', 'GalleriesController@GalleryPage')->name('ourgallery.index');
Route::get('/postus/{id}', [PostsController::class, 'show'])->name('postus.show');
Route::get('/postus','PostsController@PostPage')->name('postus.index');
Route::get('/postus/{category}','CategoriesController@show')->name('postus.cat');





Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('/contacts', 'ContactsController')->only('create', 'index', 'store');
    Route::resource('/galleries', 'GalleriesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/posts', 'PostsController');
    Route::resource('/comments', 'CommentsController');
});


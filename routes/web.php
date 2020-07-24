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
use App\frontmodels\Menu;
use App\frontmodels\Slider;
Auth::routes();

Route::prefix('admin')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\AdminController@index')->name('admin.index');
    Route::get('/users', 'back\UserController@index')->name('admin.users');    
});

Route::prefix('admin/categories')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\CategoryController@index')->name('admin.categories');
    Route::get('/create', 'back\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'back\CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}', 'back\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}', 'back\CategoryController@update')->name('admin.categories.update');
    Route::get('/destroy/{category}', 'back\CategoryController@destroy')->name('admin.categories.destroy');

});

Route::prefix('admin/articles')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\ArticleController@index')->name('admin.articles');
    Route::get('/create', 'back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'back\ArticleController@update')->name('admin.articles.update');
    Route::get('/destroy/{article}', 'back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}', 'back\ArticleController@updatestatus')->name('admin.articles.status');

});

Route::prefix('admin/comments')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\CommentController@index')->name('admin.comments');
    Route::get('/edit/{comment}', 'back\CommentController@edit')->name('admin.comments.edit');
    Route::post('/update/{comment}', 'back\CommentController@update')->name('admin.comments.update');
    Route::get('/destroy/{comment}', 'back\CommentController@destroy')->name('admin.comments.destroy');
    Route::get('/status/{comment}', 'back\CommentController@updatestatus')->name('admin.comments.status');
    Route::post('/{comment_id}/answer', 'back\CommentController@answer')->name('admin.comments.replycomment');

});

Route::prefix('admin/menus')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\MenuController@index')->name('admin.menus');
    Route::get('/create', 'back\MenuController@create')->name('admin.menus.create');
    Route::post('/store', 'back\MenuController@store')->name('admin.menus.store');
    Route::get('/edit/{menu}', 'back\MenuController@edit')->name('admin.menus.edit');
    Route::post('/update/{menu}', 'back\MenuController@update')->name('admin.menus.update');
    Route::get('/destroy/{menu}', 'back\MenuController@destroy')->name('admin.menus.destroy');
    Route::get('/status/{menu}', 'back\MenuController@updatestatus')->name('admin.menus.status');

});

Route::prefix('admin/sliders')->middleware('checkrole')->group(function(){
    Route::get('/', 'back\SliderController@index')->name('admin.sliders');
    Route::get('/create', 'back\SliderController@create')->name('admin.sliders.create');
    Route::post('/store', 'back\SliderController@store')->name('admin.sliders.store');
    Route::get('/edit/{slider}', 'back\SliderController@edit')->name('admin.sliders.edit');
    Route::post('/update/{slider}', 'back\SliderController@update')->name('admin.sliders.update');
    Route::get('/destroy/{slider}', 'back\SliderController@destroy')->name('admin.sliders.destroy');
    Route::get('/status/{slider}', 'back\SliderController@updatestatus')->name('admin.sliders.status');

});


// route front

Route::get('/', 'front\HomeController@index')->name('home');

Route::get('/search', 'front\searchController@search')->name('search');

Route::get('/about','front\AboutController@index')->name('about');
Route::get('/contact','front\ContactController@index')->name('contact');

Route::get('/profile/{user}', 'UserController@edit')->name('profile');
Route::post('/update/{user}', 'UserController@update')->name('profileupdate');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/categories', 'front\CategoryController@index')->name('categories');
Route::get('/categories/{category}', 'front\CategoryController@show')->name('category');
Route::get('/categories/{category}', 'front\CategoryController@subCategories')->name('subcategories');

Route::get('/articles', 'front\ArticleController@index')->name('articles');
Route::get('/articles/{article}', 'front\ArticleController@show')->name('article');
Route::post('/comment/{article}', 'front\CommentController@store')->name('comment.store');

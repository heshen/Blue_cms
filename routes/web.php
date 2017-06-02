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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'back','namespace' => 'Back'],function ($router)
{
    $router->get('login', 'UserController@showLoginForm');
    $router->post('login', 'UserController@login');
    $router->post('logout', 'UserController@logout');
    $router->get('/', 'BackController@index');
    //日志
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->Middleware('auth.back:back');
    //文档
    $router->get('/article', 'ArticleController@index');
    $router->get('/article/create', 'ArticleController@create');
    $router->post('/article/store', 'ArticleController@store');
    $router->get('/article/edit/{id}', 'ArticleController@edit');
    $router->post('/article/update/{id}', 'ArticleController@update');
    $router->get('/article/destroy/{id}', 'ArticleController@destroy');
    $router->get('/article/photo/{src}', 'ArticleController@showPhoto');
    //分类
    $router->get('/category', 'CategoryController@index');
    $router->get('/category/create', 'CategoryController@create');
    $router->post('/category/store', 'CategoryController@store');
    $router->get('/category/create-child/{id}', 'CategoryController@createChild');
    $router->post('/category/store-child/{id}', 'CategoryController@storeChild');
    $router->get('/category/edit/{id}', 'CategoryController@edit');
    $router->post('/category/update/{id}', 'CategoryController@update');
    $router->get('/category/destroy/{id}', 'CategoryController@destroy');
    //模块
    $router->get('/module', 'ModuleController@index');
    $router->get('/module/create', 'ModuleController@create');
    $router->post('/module/store', 'ModuleController@store');
    $router->get('/module/edit/{id}', 'ModuleController@edit');
    $router->post('/module/update/{id}', 'ModuleController@update');
    $router->get('/module/destroy/{id}', 'ModuleController@destroy');
    //友情链接
    $router->get('/friend', 'FriendController@index');
    $router->get('/friend/create', 'FriendController@create');
    $router->post('/friend/store', 'FriendController@store');
    $router->get('/friend/edit/{id}', 'FriendController@edit');
    $router->post('/friend/update/{id}', 'FriendController@update');
    $router->get('/friend/destroy/{id}', 'FriendController@destroy');
    //TAG all
    $router->get('/tag', 'TagController@index');
    $router->get('/tag/create', 'TagController@create');
    $router->post('/tag/store', 'TagController@store');
    $router->get('/tag/edit/{id}', 'TagController@edit');
    $router->post('/tag/update/{id}', 'TagController@update');
    $router->get('/tag/destroy/{id}', 'TagController@destroy');
    //TAG Module
    $router->get('/tag-module', 'TagModuleController@index');
    $router->get('/tag-module/create', 'TagModuleController@create');
    $router->post('/tag-module/store', 'TagModuleController@store');
    $router->get('/tag-module/edit/{id}', 'TagModuleController@edit');
    $router->post('/tag-module/update/{id}', 'TagModuleController@update');
    $router->get('/tag-module/destroy/{id}', 'TagModuleController@destroy');
    //图集
    $router->get('/picture', 'PictureController@index');
    $router->get('/picture/create', 'PictureController@create');
    $router->post('/picture/store', 'PictureController@store');
    $router->get('/picture/edit/{id}', 'PictureController@edit');
    $router->post('/picture/update/{id}', 'PictureController@update');
    $router->get('/picture/destroy/{id}', 'PictureController@destroy');
    //图集内图片
    $router->get('/picture-source', 'PictureSourceController@index');
    $router->get('/picture-source/create', 'PictureSourceController@create');
    $router->post('/picture-source/store', 'PictureSourceController@store');
    $router->get('/picture-source/edit/{id}', 'PictureSourceController@edit');
    $router->post('/picture-source/update/{id}', 'PictureSourceController@update');
    $router->get('/picture-source/destroy/{id}', 'PictureSourceController@destroy');
});
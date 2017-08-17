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

/*
 * Основные маршруты
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@post')->middleware('auth');
Route::get('/profile', 'ProfileController@profile')->middleware('auth');
Route::get('/category', 'CategoryController@category')->middleware('auth');

/*
 * Маршрут для добавлеяия новой категории
 */
Route::post('/addCategory', 'CategoryController@addCategory')->middleware('auth');

/*
 * Маршрут для добавления профиля
 */
Route::post('/addProfile', 'ProfileController@addProfile')->middleware('auth');
/*
 * Маршрут для добавления поста
 */
Route::post('/addPost', 'PostController@addPost')->middleware('auth');
/*
 * Маршрут для просмотра отедльного поста
 */
Route::get('/view/{id}', 'PostController@viewPost')->middleware('auth');
/*
 * Маршрут для редактирования поста
 */
Route::get('/edit/{id}', 'PostController@edit')->middleware('auth');
/*
 * Маршрут для редактирования и обновления поста
 */
Route::post('/editPost/{id}', 'PostController@editPost')->middleware('auth');
/*
 * Маршрут для удаления поста
 */
Route::get('/delete/{id}', 'PostController@deletePost')->middleware('auth');
/*
 * Маршрут для категорий на стр. отдельного поста
 */
Route::get('/category/{id}', 'PostController@category')->middleware('auth');
/*
 * Маршрут для лайков
 */
Route::get('/like/{id}', 'PostController@like')->middleware('auth');
/*
 * Маршрут для дизлайков
 */
Route::get('/dislike/{id}', 'PostController@dislike')->middleware('auth');
/*
 * Маршрут для комментариев
 */
Route::post('/comment/{id}', 'PostController@comment')->middleware('auth');
/*
 * Маршрут для поиска
 */
Route::post('/search', 'PostController@search')->middleware('auth');



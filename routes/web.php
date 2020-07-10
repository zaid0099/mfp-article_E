<?php

use Illuminate\Support\Facades\Route;
use App\Article;
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
    return view("index");
});

Route::get("about", function (){
    $articles = Article::all();

    return view("about",[
        'articles' => $articles
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articlesS', 'ArticlesController@store');
Route::get('/articles/creat', 'ArticlesController@creat');
Route::get('/articles/{article}', 'ArticlesController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articlesS/{article}', 'ArticlesController@update');



Route::get('contact', function () {
    return view("contact");
});

Route::get('xx', function () {
    return view("test");
});

//Route::get('posts/{post}', "cnPost@show");
//Route::get('about', "AssignmentController@about");

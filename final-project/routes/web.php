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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post("/productsstore", "ProductsController@store")->name("productsstore");

Route::get("/productsedit/{id}","ProductsController@edit")->name("productsedit");

Route::get("/productscreate", "ProductsController@create")->name("productscreate");

Route::post("/productsupdate","ProductsController@update")->name("productsupdate");


Route::post("/productsdelete","ProductsController@destroy")->name("productsdelete");

Route::post("/commentsstore","ProductsController@store_comment")->name("store_comment");


Route::get("/show/{id}","ProductsController@show")->name("show");







Route::post("/categories/categoriesstore", "CategoriesController@store")->name("categoriesstore");

Route::get("/categories/categoriesedit/{id}","CategoriesController@edit")->name("categoriesedit");

Route::get("/categories/categoriescreate", "CategoriesController@create")->name("categoriescreate");

Route::post("/categories/categoriesupdate","CategoriesController@update")->name("categoriesupdate");


Route::post("/categories/categoriesdelete","CategoriesController@destroy")->name("categoriesdelete");



Route::get('/categories', 'CategoriesController@index')->name('categories');



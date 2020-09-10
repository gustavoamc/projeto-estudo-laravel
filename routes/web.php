<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'produtos', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProdutoController@index')->name('index_produto');
    Route::prefix('/manipular')->group(function () {
        Route::get('/{id?}', 'ProdutoController@manipulate')->name('manipulate_produto');
        Route::post('/manipulacao/{id?}', 'ProdutoController@manipulation')->name('manipulation_produto');
    });
    Route::get('/visualizar/{id}', 'ProdutoController@show')->name('show_produto');
    Route::get('/apagar/{id}', 'ProdutoController@destroy')->name('destroy_produto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php 

use Core\Router\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', "HomeController@index");
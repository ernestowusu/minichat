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

Route::get('/', 'MainController@welcome');
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get('/login', 'Auth0IndexController@login' )->name( 'login' );
Route::get('/logout', 'Auth0IndexController@logout' )->name( 'logout' );
Route::get('/home', 'MainController@index' )->name( 'home' );

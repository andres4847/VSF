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

Route::get('/','FrontController@index');
Route::get('conocenos','FrontController@conocenos');
Route::get('contacto','FrontController@contacto');
Route::get('dona','FrontController@dona');

Route::get('eventos','EventosController@index');
Route::get('eventoslist/{page?}','EventosController@eventosall');

Route::get('proyectos','ProyectosController@index');
Route::get('proyectoslist/{page?}','ProyectosController@proyectosall');
Route::get('proyectos/{id}','ProyectosController@show');

Route::get('blog','BlogController@index');
Route::get('bloglist/{page?}','BlogController@listall');
Route::get('blog/{id}','BlogController@show');

Route::post('send','MailController@send');
Route::post('subscribe','NewsletterController@subscribe');
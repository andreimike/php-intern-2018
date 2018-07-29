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

//Route::group(['middleware' => ['test', 'test2']], function () {
    Route::get('/about', 'PagesController@about');
    Route::get('/services', 'PagesController@services');
//});

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');











/**
 *
 * Route::get('/users/{id}/{name}', function ($id, $name) {
return 'This is user ' . $id . " <br>" . $name;
});

//Route::get('about/{id}', 'UserController@show');
 *
 * Route::get('contact/{language}', function ($language) {
 * echo "Ai accesat pagina contact" . "Aceasta este pagina de contact in limba " . $language . "!";
 * });
 *
 * Route::get('contact', function () {
 * echo "Completeaza Formularul!". "<br>";
 * echo "
 * <form method='post' action='contact'>
 * <input type='hidden' name='_token' value='".csrf_token()."'>
 * <input type='hidden' value='PUT' name='_method'>
 * <input type='hidden' value='DELETE' name='_method'>
 * <input type='submit' value='Trimite'>
 * </form>
 * ";
 * });
 *
 * //EXISTA 4 TIPURI DE RUTE:
 * // - GET - READ
 * // - POST - CREATE
 * // - PUT - UPDATE
 * // - DELETE - DELETE
 *
 * // Urmeaza sistemul CRUD:
 * //CREATE - CREATE, READ, UPDATE, DELETE
 *
 * Route::post('contact', function ()
 * {
 * echo "Formularul a fost trimis cu succes!";
 * });
 *
 * Route::put('contact', function (){
 * echo "Acesta este pagina cu metoda PUT";
 * });
 *
 * Route::delete('contact', function (){
 * echo "Aceasta este pagina cu metoda DELETE";
 * });
 **/
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

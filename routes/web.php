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
//use App\Image;

Route::get('/', function () {

   /* $images = Image::all();

    foreach ($images as $image) {
       
       echo $image->image_path.'<br>';
       echo $image->description.'<br>';
       echo $image->user->name.'<br>';
       echo "<hr>";
       // var_dump($image);
    }
    die();*/

    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/configuracion', 'UserController@config')->name('config');
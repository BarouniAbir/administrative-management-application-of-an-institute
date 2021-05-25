<?php

use Illuminate\Support\Facades\Route;
use App\Models\Enseignant;
use App\Models\Cours;
use App\Models\Diplome;


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

Route::get('show/{id}', 'EtudiantController@show');
Route::resource('index', 'EtudiantController');
Route::resource('index7', 'EtudiantController');

Route::get('show2/{id}', 'EnseignantController@show2');
Route::resource('index2', 'EnseignantController');
Route::get('show3/{id}', 'CoursController@show3');
Route::resource('index3', 'CoursController');

Route::get('show4/{id}', 'DiplomeController@show4');
Route::resource('index4', 'DiplomeController');


Route::fallback(function() {
   return view('index5'); // la vue
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

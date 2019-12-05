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
// route pour specialité // 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('GDOCTOR/listSpecial', 'specialController@listSpecial'); 
Route::post('GDOCTOR/save','specialController@saveList'); 
route::delete('GDOCTOR/{id}', 'specialController@destroy'); 

// route pour user // 
route::get('/listprofile', 'UserController@listUser'); 
route::get('/profile', 'UserController@index'); 
route::post('chercher' ,'UserController@chercher') ;
Route::post('user/store','UserController@store') ; 

// route pour le doctotr // 
route::get('/addDoctor', 'doctorController@listD'); 
route::post('store', 'doctorController@store');
route::get('allmedecin','doctorController@index') ;
route::post('cherhcerM', 'doctorController@chercher') ;

//route pour le jour de travaille // 
route::get('jour/index','travailleController@index'); 
route::post('sotre/travaille', 'travailleController@store');

// Route pour le Patient  // 
Route::get('index', 'patientsController@index' ) ; 
Route::get('create', 'patientsController@create') ; 
Route::post('storePatient','patientsController@store') ; 
Route::DELETE('destroy/{id}', 'patientsController@destroy') ;

// Route pour la fiche de rendez vous // 
Route::get('fiche/index', 'ficheController@index'); 


Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback') ;

    



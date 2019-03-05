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
use App\Indevidu;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/Deco', function () {
    return view('Deco');
})->name('Deco');

Route::get('/Bricolage', function () {
    return view('Bricolage');
})->name('Bricolage');

Route ::resource('/allArt','AllArtController');
Route::resource('/NewArt','ArticleController');
/*
Route::get('{n}', function($n) {


	switch ($n) {
		case 'Singup':
			return view('Singup');
			break;
		case 'dashbord':
			return view('dashbord');
			break;
		case 'login':
			return view('login');
			break;
		case 'contact':
			return view('contact');
			break;
		default:
			return abort(404);
			break;
	}

});
*/
Route::get('/insert', function(){

   $indevidu = new Indevidu;

   $indevidu->Nom = 'Doudi';
   $indevidu->Prenom = 'DOU';
   $indevidu->Age = 20;
   $indevidu->Email ='Doudi459@gmail.com';
   $indevidu->Adress = '23 Route de melun';


   $indevidu->save();




});


Auth::routes();

Route::get('/dashbord', 'HomeController@index')->name('dashbord');



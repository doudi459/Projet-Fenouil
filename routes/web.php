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

use App\Article;

Route::get('/', function () {

    $arts = DB::select('SELECT * FROM Article  ORDER BY numéro DESC');
    $ArtsBricolage = [];
    $ArtsDecoration = [];
    $Brico = 0;
    $Deco = 0;
    foreach ($arts as $ast) {
        if ($ast->Categori == "Bricolage") {
            $ArtsBricolage[] = $ast;
            $Brico++;

        }
        if ($ast->Categori == "Decoration") {
            $ArtsDecoration[] = $ast;
            $Deco++;

        }


        if ($Brico == 3 && $Deco == 3)
            break;

    }

    return view('index',compact('ArtsBricolage','ArtsDecoration'));
})->name('index');

//**********************************************************************************************************************

Route::get('/Deco', function () {
    $ArtsDecoration = Article::all()->where('Categori','Decoration' );

    return view('Deco',compact('ArtsDecoration'));
})->name('Deco');

//**********************************************************************************************************************

Route::get('/Bricolage', function () {
    $ArtsDecoration = Article::all()->where('Categori','Bricolage' );
    return view('Bricolage',compact('ArtsDecoration'));
})->name('Bricolage');

//**********************************************************************************************************************
Route::get('/ValidéCommande', function () {

    return view('ValidéCommande');
})->name('ValidéCommande');

//Route::post('/Commande/store', 'CommandeController@store')->name('Commande.store');

Route::group(['middleware' => ['web']], function () {
    Route::resource('/Commande', 'CommandeController');
    Route::resource('/allArt', 'AllArtController');
    Route::resource('/NewArt', 'ArticleController');
});




Auth::routes();

Route::get('/dashbord', 'HomeController@index')->name('dashbord');



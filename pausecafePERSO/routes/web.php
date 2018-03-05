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
    return view('controllerSign/index');
});
//route test juste pour lier la page index (inscription directe) et flux
//on a ajouté dans form action {{ route('flux')}}
//on a crée un controller essai qui sera à modifier lors
//du module sécurité

//signIn redirige vers le flux
Route::get('/flux' , 'signController@signIn')->name('flux');
Route::post('/flux' , 'signController@signIn')->name('flux');
//signUp dirige vers le formulaire d'inscription
Route::get('controllerSign/inscription' , 'signController@signUp')->name('inscription');
Route::post('controllerSign/inscription' , 'signController@signUp')->name('inscription');

//signUpInteret redirige vers le formulaire Centres d'intérêts
Route::get('controllerSign/centresInterets', 'signController@signUpInteret')->name('centresInterets');
Route::post('controllerSign/centresInterets', 'signController@signUpInteret')->name('centresInterets');
//-------------Route de la Navbar du header---------------------




//User connected redirige vers le flux (concerne logo du header)
Route::get('flux', 'connectController@connected')->name('flux.get'); 

//User disconnected redirige vers index (concerne logo du header)
Route::get('controllerSign/index', 'connectController@disconnected')->name('index.get'); 


//Regroupement des routes pour l'utilisateur connecté
Route::group(['prefix'=>'user'], function(){
    //Redirige vers monProfil.blade (icone profil)
    Route::get('profile', function(){
        return view('monProfil');
    })->name('user_profil.get');
    //Redirige vers monProfil.blade (icone partager)
    Route::get('partager', function(){
        return view('monProfil');
    })->name('partager.get');
    //Redirige vers parametres.blade (icone parametre)
    Route::get('parametre', function(){
        return view('parametres');
    })->name('parametres.get');
    //Redirige vers chat.blade (icone message)
    Route::get('chat', function(){
        return view('chat');
    })->name('chat.get');
    //Redirige vers geoloc.blade (icone geoloc)
    Route::get('geoloc', function(){
        return view('geoloc');
    })->name('geoloc.get');
});

// :):):):):):):):):):):):):):):):):):):):):):):):):)
// routes vers pages amis et membres
Route::get('amis', function(){
    return view('amis');
})->name('ami');
Route::get('membres', function(){
    return view('membres');
})->name('membres');
<?php

namespace App\Http\Controllers;
use App\exocard;
use Illuminate\Http\Request;

class ActorCardsController extends Controller
{
    public function store(Request $request, exocard $card){

       
        $acteur=new exocard;
        $acteur->title=$request->title;
        $acteur->films=$request->films;
        $acteur->annee_de_naissance=$request->annee_de_naissance;
      
        $card->save(compact($acteur));
        return redirect()->action('cardsController@index');
    }
    //pb les données ne sont pas sauvées ni ne s'affihce
}

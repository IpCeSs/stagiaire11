<?php

namespace App\Http\Controllers;
use App\exocard;
use Illuminate\Http\Request;

class cardsController extends Controller
{
    public function index(){
        $exoCards=exocard::all();
return view('cards.index', compact('exoCards'));
    }

public function show($id)
{
    $exocard=exocard::find($id);
    return view('cards.carte', compact('exocard'));
}

}

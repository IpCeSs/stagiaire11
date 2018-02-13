<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class persoController extends Controller
{
    //on crée une methode/ une fonction
    // que l'on appelle dans la route avec @home
    public function home()
    {
        $nom='Cécilia';
        return view('welcome',compact('nom'));
    }

    public function first()
    {
        $premier="Theres nothing else i can say eheh!";
        return view('premier', compact('premier'));
    }
}

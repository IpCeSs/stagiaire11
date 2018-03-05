<?php
namespace App\Http\Controllers;

class signController extends Controller{
    public function signIn(){
        return view('flux');
    }
    public function signUp(){
        return view('controllerSign/inscription');
    }

    public function signUpInteret(){
        return view('controllerSign/centresInterets');
    }
}



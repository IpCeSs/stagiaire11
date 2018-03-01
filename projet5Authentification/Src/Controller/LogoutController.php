<?php

namespace Src\Controller;

//use Src\Base\Controller;

/**
 * Class LogoutController
 *
 * @package Src\Controller
 */
class LogoutController extends Controller

{
    public function __construct()
    {
        parent::__construct();
        //chemin
        if (isset($_GET['action']) && $_GET['action'] === 'disconnect')
        {
            $this->destroy();
        }
        //vérifie si la connexion est en cours
        if (!isset($_SESSION['connect']) || $_SESSION['connect'] !== true )
        {
            die('Go to Hell');
        }



    }


    public function destroy()
    {
//on crée une methode quie va détruire session et cookies une fois log out pressé
     $_SESSION['login'] = 'cess';
        $_SESSION['password'] = "c";

        session_destroy();

        setcookie("login", $_POST['login'], time() - 60 * 60 * 24);
        setcookie("password", $_POST['password'], time() - 60 * 60 * 24);
        setcookie('connected', true, time() - 60 * 60 * 24);
        header('location:?page=login');


    }


}

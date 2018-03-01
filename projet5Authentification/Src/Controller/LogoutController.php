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
        if (isset($_GET['action']) && $_GET['action'] === 'disconnect')
        {
            $this->destroy();
        }
        if (!isset($_SESSION['connect']) || $_SESSION['connect'] !== true )
        {
            die('Go to Hell');
        }



    }


    public function destroy()
    {

     $_SESSION['login'] = 'cess';
        $_SESSION['password'] = "c";

        session_destroy();

        setcookie("login", $_POST['login'], time() - 60 * 60 * 24);
        setcookie("password", $_POST['password'], time() - 60 * 60 * 24);
        setcookie('connected', true, time() - 60 * 60 * 24);
        header('location:?page=login');


    }


}

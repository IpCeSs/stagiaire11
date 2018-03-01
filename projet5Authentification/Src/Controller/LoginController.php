<?php

namespace Src\Controller;


/**
 * Class LoginController
 *
 * @package Src\Controller
 */
class LoginController extends Controller
{


    public function __construct()
    {
        parent::__construct();
        if (
            isset($_POST['password']) &&
            isset($_POST['login']) &&
            'cess' === $_POST['login'] &&
            "c" === $_POST['password']
        ) {

            if (isset ($_POST['login']) && isset($_POST['password'])) {
                $hour = time() + (60 * 60 * 24);
                setcookie('login', $_POST['login'], $hour);
                setcookie('password', $_POST['password'], $hour);
            }
            $this->rememberCookie();
        }

        if (isset($_COOKIE['connected']) && $_COOKIE['connected'] === "1") {

            $this->rememberCookie();

        }
    }


    public function rememberCookie()
    {
        $_SESSION['login'] = 'cess';
        $_SESSION['password'] = "c";
        $_SESSION['connect'] = true;


        setcookie('connected', true, time() + (60 * 60 * 24));
        header('location:?page=logout');


    }


    /*  public function cookieglobal()
    {
      if (isset ($_POST['login']) && isset($_POST['password'])) {
          {
              $hour = time() + (60 * 60 * 24);
              setcookie('login', $_POST['login'], $hour);
              setcookie('password', $_POST['password'], $hour);

          }
      }

    }*/

}
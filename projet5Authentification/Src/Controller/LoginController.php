<?php

namespace Src\Controller;


/**
 * Class LoginController
 *
 * @package Src\Controller
 */
class LoginController extends Controller
{


    public function start()
    {
        session_start();
        $_SESSION['login'] = 'cess';
        $_SESSION['password'] = "c";
        {
            if (
                isset($_POST['password']) &&
                isset($_POST['login'])
            ) {
                if (
                    $_SESSION['login'] === $_POST['login'] &&
                    $_SESSION['password'] === $_POST['password']
                ) {
                    $this->cookielogin();
                    $this->cookiepass();

                    header('location:?page=logout');
                } else {
                    die('Pas les bons identifiants');
                }


            }
        }
    }

    public function cookielogin()
    {
        if (isset ($_POST['login'])) {
            {
                $hour = time() + 3600 * 24 * 30;
                setcookie('login', $_POST['login'], $hour);

            }
        }

    }

    public function cookiepass()
    {
        if (isset ($_POST['password'])) {
            {
                $hour = time() + 3600 * 24 * 30;

                setcookie('password', $_POST['password'], $hour);
            }


        }
    }
}
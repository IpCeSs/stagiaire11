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
            if (isset($_POST)) {
                if (
                    isset($_POST['login']) &&
                    isset($_POST['password']) &&
                    $_POST['login'] === "1"
                    && $_POST['password'] === "1"
                ) {

                    if (isset($_POST['remember_me']) && $_POST['remember_me'] === "on") {
                        setcookie('login', $_POST['login'], time() + (60 * 60 * 24));
                        setcookie('password', $_POST['password'], time() + (60 * 60 * 24));
                    }

                    $this->connect();
                }

            }

            if (isset($_COOKIE['is_connected']) && $_COOKIE['is_connected'] === "1") {
                $this->connect();
            }
        }

        public function connect()
        {

            $_SESSION['is_connected'] = true;
            $_SESSION['login'] = 'Alexandre';

            setcookie('is_connected', true, time() + (60 * 60 * 24));

            header("Location: /?page=logout");
        }

    }










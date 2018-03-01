<?php

namespace Src\Controller;


/**
 * Class LoginController
 *
 * @package Src\Controller
 */
class LoginController extends Controller
{




    public function start(){
        session_start();
            $_SESSION['login']='cess';
            $_SESSION['password']="c";
    {
        if (
            isset($_POST['password']) &&
            isset($_POST['login'])
        ) {
            if (
                $_SESSION['login'] === $_POST['password'] &&
                $_SESSION['password']  === $_POST['login']
            ) {
                header('location:?page=logout');
            } else {
                die('Pas les bons identifiants');
            }


        }}}
        public function cookie()
    {
        if (isset ($_POST['remember'])) {
            if ($_POST["remember"] == "1" || $_SESSION["remember"] == 'on') {
                $hour = time() + 3600 * 24 * 30;
                setcookie('login', $_POST['login'], $hour);
                setcookie('password', $_POST['password'], $hour);


            }
        }

    }







}
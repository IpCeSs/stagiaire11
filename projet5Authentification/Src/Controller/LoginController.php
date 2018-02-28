<?php

namespace Src\Controller;


/**
 * Class LoginController
 *
 * @package Src\Controller
 */
class LoginController extends Controller
{

    protected $login = 'Chouchou';
    protected $password = 'Kangourou';
    protected $remember;

    public function verif()
    {
        if (
            isset($_POST['password']) &&
            isset($_POST['login'])
        )
        {
            if (
                $this->password === $_POST['password'] &&
                $this->login === $_POST['login']
            ) {
                header('location:/?page=logout');
            } else {
                die('Pas les bons identifiants');
            }


        }

    }


}
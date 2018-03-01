<?php

namespace Src\Controller;
use Src\Base\Controller;

/**
 * Class LogoutController
 *
 * @package Src\Controller
 */
class LogoutController extends Controller
{
    public $logout;

    public function __construct()
    {

        if(isset($_GET['action']) && $_GET['action'] === 'disconnect') {
            $this->destroy();
        }

    }


    public function destroy()
    {

        $_SESSION['login'] = 'cess';
        $_SESSION['password'] = "c";

                    session_destroy();

                setcookie("login", $_POST['login'], time() - 3600 * 24 * 60);
                setcookie("password", $_POST['password'], time() - 3600 * 24 * 60);
                header('/');


            }
        }


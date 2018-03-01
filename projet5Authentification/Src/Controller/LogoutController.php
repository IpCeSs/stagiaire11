<?php

    namespace Src\Controller;


    /**
     * Class LogoutController
     *
     * @package Src\Controller
     */
    class LogoutController extends Controller
    {
        public $logout;
        public function destroy()
        {
            session_destroy();

            header('location:?page=login');




        }
    }
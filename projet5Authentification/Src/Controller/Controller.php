<?php

    namespace Src\Controller;


    /**
     * Bonjour je suis le Controller
     *
     * Class Controller
     */
    abstract class Controller
    {
        public static function sessionStart(){

                          session_start();
        }


    }
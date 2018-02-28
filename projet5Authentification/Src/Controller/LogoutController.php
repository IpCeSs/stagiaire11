<?php

    namespace Src\Controller;


    /**
     * Class LogoutController
     *
     * @package Src\Controller
     */
    class LogoutController extends Controller
    {
        public function out()
        {
            parent::sessionDie();

            echo "la session s'est terminée correctement";



        }
    }
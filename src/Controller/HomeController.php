<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
        // Contacter le modèle pour récupérer les données : RIEN A RECUPERER !!!

        // Traiter les données : RIEN A TRAITER

        // Injecter les donnèes dans la vue.

        require(ROOT . '/src/view/homepage.php');
     
    }
}
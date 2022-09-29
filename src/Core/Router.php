<?php

namespace App\Core;

use App\Controller\HomeController;
use App\Controller\PostController;

class Router
{
    public function run()
    {
        if (!isset($_GET['page'])) $_GET['page'] = 'home';

        if ($_GET['page'] = 'home') {
            $controller = new HomeController;
            $controller->index();
        } elseif ($_GET['page'] = 'post') {
            $controller = new PostController;
            $controller->index();
        } else {
            $controller = new HomeController;
            $controller->index();
        }
    }
}

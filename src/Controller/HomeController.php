<?php
namespace App\Controller;

class HomeController
{
    public function index()
    {
        ob_start();
        require(dirname(__DIR__) . '/view/home/index.php');
        $content=ob_get_clean();

        require(dirname(__DIR__) . '/view/base.php');
    }
}
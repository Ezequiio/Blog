<?php

namespace App\Controller;

use App\Model\PostRepository;

class PostController
{
    public function index()
    {
        $repo = new PostRepository;
        $posts = $repo->findAll();

        ob_start();
        require(dirname(__DIR__) . '/view/post/index.php');
        $content = ob_get_clean();

        require(dirname(__DIR__) . '/view/base.php');
    }

    public function show()
    {
        $postId = $_GET['id'];
        $repo = new PostRepository;
        $post = $repo->findOne($postId);
        ob_start();
        require(dirname(__DIR__) . '/view/post/show.php');
        $content = ob_get_clean();

        require(dirname(__DIR__) . '/view/base.php');
    }
}
<?php

namespace App\Model;

use PDO;

class PostRepository
{
    public function findAll()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

        $request = $dbh->query('SELECT * FROM post');
        $request->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Post');

        $posts = $request->fetchAll();

        return $posts;
    }

    public function findOne()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

        $request = $dbh->query("SELECT * FROM post WHERE id = $postId");
        $request->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Post');

        $posts = $request->fetch();

        return $posts;
    }
}
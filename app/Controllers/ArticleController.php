<?php

namespace App\Controllers;

use Core\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [];
        View::render('articles.php', [
            'title' => 't',
            'articles' => $articles,
        ]);
    }

    public function create()
    {
        echo 'create ';
    }

    public function store()
    {
        echo 'store ';
    }

    public function show()
    {
        View::render('article.php', [
            'title' => '標題',
            'author' => 'author',
        ]);
    }

    public function edit()
    {
        echo 'edit ';
    }

    public function update()
    {
        echo 'update ';
    }

    public function destroy()
    {
        echo 'destroy ';
    }
}
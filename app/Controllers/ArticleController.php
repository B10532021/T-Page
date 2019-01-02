<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

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
        $messages[0] = [
            'name' => ' 姓名0',
            'content' => '內容0',
        ];
        $messages[1] = [
            'name' => ' 姓名1',
            'content' => '內容1',
        ];
        $article = [
            'title' => 'title',
            'author' => '作者',
            'content' => '文章',
            'messages' => $messages,
            ];
        View::render('article.php', [
            'article' => $article,
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
<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class BoardController extends Controller
{
    public function index()
    {
        echo 'index ';
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
<?php

namespace tools\core\controllers;

class Main extends Controller
{
    public function index()
    {
        include VIEWS_PATH . 'layout.php';
    }
}
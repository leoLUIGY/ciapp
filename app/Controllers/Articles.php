<?php


namespace App\Controllers;

class Articles extends BaseController {
    public function index(): string
    {
        return view("Articles/index.php");
    }
}
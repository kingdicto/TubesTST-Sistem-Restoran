<?php
namespace App\Controllers;
class Core extends BaseController{
    public function index(): string
    {
        return view('header').view('menu').view('core').view('footer');
    }
}

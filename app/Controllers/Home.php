<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    // public function index(){
    //     echo 'Restoran';     
    // }

    public function index(){

        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }
        return view('header').view('menu').view('dashboard').view('footer');
    }



}

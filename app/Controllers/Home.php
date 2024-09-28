<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    public function index()
    {
        echo view('header');
        $data = ['titulo' => 'Cocina de Nancy'];
        $data['archivo_js'] = 'navbar.js';
        echo view('home', $data);
        echo view('footer');
    }
    public function contacto()
    {
        echo view('header');
        echo view('contacto');
        echo view('footer');
    }
    public function productos()
    {
        echo view('header');
        echo view('productos');
        echo view('footer');
    }
}

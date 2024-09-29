<?php

namespace App\Controllers;

use Config\Database;

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
        $db = Database::connect();
        $query = $db->query("SELECT * FROM productos");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Dulces Peruanos', 'productos' => $resultado];
        //$data['archivo_js'] = 'novia.js';

        echo view('header');
        echo view('productos', $data);
        echo view('footer');
    }
}

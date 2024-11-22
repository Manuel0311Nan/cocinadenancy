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
    public function nosotros()
    {
        echo view('header');
        echo view('nosotros');
        echo view('footer');
    }
    public function productos()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM productos");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Dulces Peruanos', 'productos' => $resultado];

        echo view('header');
        echo view('productos', $data);
        echo view('footer');
    }
}

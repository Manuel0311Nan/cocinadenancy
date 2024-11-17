<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\OpcionesCompraModel;
use CodeIgniter\Controller;

class ProductosController extends Controller
{
    public function obtenerDetallesProducto($idProducto)
    {
        $modelProducto = new ProductoModel(); 
        $modelOpciones = new OpcionesCompraModel();

        $producto = $modelProducto->find($idProducto);

        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }

        $opciones = $modelOpciones->where('producto_id', $idProducto)->findAll();

        echo view('header');
        echo view('detalle_producto', [
            'producto' => $producto,
            'opciones_compra' => $opciones
        ]);
        echo view('footer');
    }
}

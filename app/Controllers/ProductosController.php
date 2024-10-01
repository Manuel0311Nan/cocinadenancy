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

        // Obtener los detalles del producto
        $producto = $modelProducto->find($idProducto);

        // Si el producto no existe, retornar un error
        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }

        // Obtener las opciones de compra asociadas al producto
        $opciones = $modelOpciones->where('producto_id', $idProducto)->findAll();

        echo view('header');
        echo view('detalle_producto', [
            'producto' => $producto,
            'opciones_compra' => $opciones
        ]);
        //echo view('footer');
    }
}

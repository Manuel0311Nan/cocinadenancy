<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductoModel;
use App\Models\OpcionesCompraModel;

class CarritoController extends Controller
{
    public function __construct()
    {
        helper(['url', 'session']);
    }

    public function agregarAlCarrito()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];

        $data = json_decode($this->request->getBody(), true);

        if (!isset($data['id']) || !isset($data['cantidad'])) {
            return $this->response->setJSON([
                'success' => false,
                'error' => 'Faltan datos requeridos: id o cantidad'
            ]);
        }
        $idProducto = $data['id'];
        $cantidad = $data['cantidad'];

        $model = new OpcionesCompraModel();
        $producto = $model->find($idProducto);

        if ($producto) {
            $carrito[] = [
                'id' => $idProducto,
                'nombre' => $producto['nombre'],
                'cantidad' => $cantidad,
                'tamaño' => $producto['tamaño'],
                'precio' => $producto['precio']
            ];
            $session->set('carrito', $carrito);

            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Producto no encontrado']);
        }

    }

    public function verCarrito()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];


        echo view('header');
        echo view('contacto', ['carrito' => $carrito]);
        echo view('footer');
    }
    public function eliminarDelCarrito()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];

        // Obtener el índice del producto a eliminar
        $data = json_decode($this->request->getBody(), true);
        $index = $data['index'];

        if (isset($carrito[$index])) {
            unset($carrito[$index]);
            $session->set('carrito', array_values($carrito)); // Reindexar el array
        }

        return $this->response->setJSON(['success' => true]);
    }
    public function cantidadCarrito()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];
    
        // La cantidad total será el número de elementos en el carrito
        $cantidadTotal = count($carrito);
    
        return $this->response->setJSON(['cantidad' => $cantidadTotal]);
    }

}

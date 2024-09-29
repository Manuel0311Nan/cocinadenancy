<?php

namespace App\Controllers;

use App\Models\ProductoModel;  // Asegúrate de tener un modelo para los productos

class ProductosController extends BaseController
{
    public function detalle($id)
    {
        $model = new ProductoModel();
        $data['producto'] = $model->where('id', $id)->orWhere('slug', $id)->first();

        if (empty($data['producto'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }

        return view('detalle_producto', $data);
    }
}

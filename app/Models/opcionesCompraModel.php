<?php

namespace App\Models;

use CodeIgniter\Model;

class OpcionesCompraModel extends Model
{
    protected $table = 'opciones_compra';
    protected $primaryKey = 'id';
    protected $allowedFields = ['producto_id', 'cantidad', 'precio'];
}

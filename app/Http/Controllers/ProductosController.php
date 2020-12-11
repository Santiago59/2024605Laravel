<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function productos()
    {
        $productos =['Pantalones','Camisas','Sacos','Zapatos','Busos','Camisetas'];
        return view('Productos.productos',compact('productos'));
    }
}

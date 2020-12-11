<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function pedidos()
    {
        $pedidos =['Cra 32#20-22 - Santiago Vasquez',"Zapatos","Unidades:". 20,'Calle 5#30A-35 - Bob Patiño',"Camisas","Unidades:". 4,'Calle Siempre Viva #305 - Maggie Simpson',"Conjuntos","Unidades:". 7];
        return view('Pedidos.pedidos',compact('pedidos'));
    }
} 

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
     public function cliente()
        {
            $clientes = ['Hanier Maya','Jhenifer Katerin Chilito','Kevin Diago Gonzales','Ever Guamanga','Danilve Zoel Gaviria','Cristian Andres Toro','Yarlid Hoyos Samboni'];
            return view('Cliente.cliente', compact('clientes'));        
        }
}

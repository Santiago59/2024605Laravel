@extends('plantillaweb')

@section('secciondinamica')
<br>

<h1>Lista De Productos</h1>

<br>

@foreach($productos as $i)
<p>Producto</p>
<h3 style="color: grey;">{{$i}}</h3>
@endforeach
@endsection
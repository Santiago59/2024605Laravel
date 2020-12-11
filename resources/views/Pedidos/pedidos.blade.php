@extends('plantillaweb')

@section('secciondinamica')

<br>

<h1>Lista de Pedidos</h1>

<br>
@foreach($pedidos as $i)
<h3 style="color: grey;">{{$i}}</h3>
@endforeach
@endsection
@extends('plantillaweb')

@section('secciondinamica')
<br>

<h1>Lista de clientes</h1>

<br>

@foreach($clientes as $i)
<h3 style="color: grey;">{{$i}}</h3>
<p> cliente</p>
@endforeach
@endsection
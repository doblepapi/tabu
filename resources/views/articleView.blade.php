@extends('layouts.app')
@section('content')

    <h1>Aquí estan mis artículos</h1>

   @foreach ($variosArticulos as $articulo)

    <table border=1 style="margin: 10px;">
    <tr><th>{{$articulo->titulo}}</th></tr>
    <tr><td>{{$articulo->resumen}}</td></tr>
    <tr><td>{{$articulo->link}}</td></tr>
    <tr><td>{{$articulo->author}}</td></tr>
    <tr><td>{{$articulo->year}}</td></tr>
    <tr><td>{{$articulo->keyWord}}</td></tr>
    <tr><td>{{$articulo->created_at}}</td></tr>
    <tr><td>{{$articulo->updated_at}}</td></tr>
    </table>
    @endforeach

@endsection

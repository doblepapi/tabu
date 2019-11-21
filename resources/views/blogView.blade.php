@extends('layouts.app')
@section('content')

    <h1>Aquí estan mis blogs</h1>

   @foreach ($variosArticulosBlog as $blog)

    <table border=1 style="margin: 10px;">
    <tr><th>{{$blog->titulo}}</th></tr>
    <tr><td>{{$blog->resumen}}</td></tr>
    <tr><td>{{$blog->link}}</td></tr>
    <tr><td>{{$blog->author}}</td></tr>
    <tr><td>{{$blog->year}}</td></tr>
    <tr><td>{{$blog->keyWord}}</td></tr>
    <tr><td>{{$blog->created_at}}</td></tr>
    <tr><td>{{$blog->updated_at}}</td></tr>
    </table>
    @endforeach

@endsection

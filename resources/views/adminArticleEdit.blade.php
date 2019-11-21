@extends('layouts.app')
@section('content')

<h1>Imprimo Articulo Editado</h1>

<form action="{{route('articles.update',$articulo->id)}}" method="PUT">
        @csrf
        @method("PUT")
    <tr>
    <td>Titulo del articulo</td>&nbsp&nbsp<td><input type="text" class ="busca" id = "title" name="titulo"value="escribe el titulo"/></td></br>
    <td>Resumen del artículo</td>&nbsp&nbsp<td><input type="text" class ="busca" name="resumen" id= "resumenArticulo" value="pega el resumen del artículo"/></td></br>
    <td>Link donde encontrar artículo</td>&nbsp&nbsp<td><input type="url" class ="busca" name="link" id= "link" value="pega el link donde encontrar el artículo"/></td></br>
    <td>Autor artículo</td>&nbsp&nbsp<td><input type="text" class ="busca" name="author"id= "autor" value="pega nombre del autor del artículo"/></td></br>
    <td>Año</td>&nbsp&nbsp<td><input type="text" id= "año" class ="busca" name="year" value="pega el año del artículo"/></td></br>
    <td>Palabras clave para la búsqueda</td>&nbsp&nbsp<td><input type="text" class ="busca" name="keyWords" id= "clavesArticulos" value="pega las palabras clave que serviran a la busqueda"/></td></tr></br>
    <button class="btn btn-primary" type="submit">Guardar</button>


    </form>
@endsection

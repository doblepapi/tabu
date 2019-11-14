@extends('layouts.app')
@section('content')
        
    <h1>Hola administrador /Artículo !!!</h1>

    <h3>Introducir aquí los datos para crear, editar o borrar un artículo</h3>
    <form>
    <tr><td>Id del articulo</td>&nbsp&nbsp<td><input type="text" id = "titleId" value="escribe la id del articulo si lo conoces"/></td></br>
    <td>Titulo del articulo</td>&nbsp&nbsp<td><input type="text" id = "title" value="escribe el titulo"/></td></br>
    <td>Resumen del artículo</td>&nbsp&nbsp<td><input type="text" id= "resumenArticulo" value="pega el resumen del artículo"/></td></br>
    <td>Link donde encontrar artículo</td>&nbsp&nbsp<td><input type="url" id= "link" value="pega el link donde encontrar el artículo"/></td></br>
    <td>Autor artículo</td>&nbsp&nbsp<td><input type="text" id= "autor" value="pega nombre del autor del artículo"/></td></br>
    <td>Año</td>&nbsp&nbsp<td><input type="text" id= "año" value="pega el año del artículo"/></td></br>
    <td>Palabras clave para la búsqueda</td>&nbsp&nbsp<td><input type="text" id= "clavesArticulos" value="pega las palabras clave que serviran a la busqueda"/></td></tr></br>
    <button>Guardar</button>
    <button>Editar</button>
    <button>Borrar</button>
    
    </form>
@endsection
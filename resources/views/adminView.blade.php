@extends('layouts.app')
@section('content')
        
    <h1>Hola administrador !!!</h1>

    <button class="botonCuadrado" id="elLugar">Lugar</button>
    <button class="botonCuadrado" id="elArticulo" type="button" onclick="window.location='{{ url("admin/article") }}'">Artículo</button>
    <button class="botonCuadrado" id="laPalabra">Palabras</button>
    <button class="botonCuadrado" id="laDefinicion">Definición</button>
    <button class="botonCuadrado" id="elInteres">Intereses</button>
    <button class="botonCuadrado" id="elAdministrador">Admin</button>
@endsection

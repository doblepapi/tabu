@extends('layouts.app')
@section('content')
  <div id="container justify-content-md-center">
    <div class="row align-content-md-center">
    <div id="definicion" class="col align-self-end card"> <a href={{"/definicion"}}> Definicion</a></div>
    <div id="lugares" class="col align-self-center card"><a href={{"/map"}}> Lugares</a></div>
    <div id="eventos" class="col card"><a href={{"/"}}>Eventos</a></div>
    <div id="blog" class="col card"><a href={{"/"}}>Blog</a></div>
    <div id="articulos" class="col card"><a href={{"/"}}>Articulos</a></div>
    <div id="sexo" class="col card"><a href={{"/"}}>Sexo</a></div>
    </div>
  </div>
  {{{$searchResult}}}
@endsection

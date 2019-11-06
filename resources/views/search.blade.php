@extends('layouts.app')
@section('content')
        

<div id="fakebox-container">
    <div class="fakebox">
        <form method="POST" action="/searchIo">
            {{csrf_field()}}
        @csrf
        <div class="fakebox-search-icon">
            <i class="fas fa-search"></i>
        </div>
        <input id="fakebox-input" placeholder="Busca en Tabu" name="query" type="search" class="form-control" autocomplete="off">
    </form>
    </div>
    <div  class="container" style="width: 50rem;">
        <p class="text-center">TABU es más que una busqueda, es una experiencia que dispone datos libres para TODXS. Tratamos temáticas transversales acerca sexualidad y género, de manera informativa y educativa.</p>
    </div>

{{-- <!-- @can('update',$post)

@endcan -->--}}

    @endsection

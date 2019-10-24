
@extends('layouts.app')

@section('content') 

<div id="fakebox-container">
    <div class="fakebox">
        <div class="fakebox-search-icon">
            <i class="fas fa-search"></i>
        </div>
        <input id="fakebox-input" placeholder="Busca en Tabu" type="search" class="form-control" autocomplete="off">
    </div>
@section('content')
<div  id="fakebox-container">
    <form method="POST" action="/searchIo">
        {{csrf_field()}}
        @csrf
        <input type="text" id="fakebox-input" placeholder="Busca en Tabu" name="query" type="search" class="form-control" autocomplete="off">
        <input type="submit" id="fakebox-input"  value="Search now"/>
    </form>
</div>




@endsection
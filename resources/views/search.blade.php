
@extends('layouts.app')

@section('content') 

<<<<<<< HEAD
<div id="fakebox-container">
    <div class="fakebox">
        <div class="fakebox-search-icon"></div>
        <div id="fakebox-text">Busca en Tabu</div>
        <input id="fakebox-input" type="search" class="form-control" autocomplete="off">
    </div>
</div>



=======
            <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Writte your search" name="searching">
                <button type="submit"><i class="fa fa-search">Search now</i></button>
                </form>
            </div>
>>>>>>> css&sass_estilos

@endsection
@extends('layouts.app')
@section('content')
<div  id="fakebox-container">
    <form method="POST" action="/searchIo">
        {{csrf_field()}}
        @csrf
        <input id="fakebox-input" placeholder="Busca en Tabu" type="search" name="query" class="form-control" autocomplete="off">
    </form>
</div>

@endsection
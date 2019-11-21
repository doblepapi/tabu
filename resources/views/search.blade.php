@extends('layouts.app')
@section('content')
        

<div id="fakebox-container">
    <div class="fakebox">
        <form action="/searchIo" method="post">
            {{csrf_field()}}
            @csrf
            <div class="fakebox-search-icon">
                <i class="fas fa-search"></i>
            </div>
            <input type="search" placeholder="Busca en Tabu" class="form-control busca" name="query" id="fakebox-input" autocomplete="off">
            </form>
    
    </div>
</div>
    
{{-- <!-- @can('update',$post)

@endcan --> --}}

    @endsection

@extends('layouts.app')

@section('content')

<div class="buscarResultado">

    @foreach($searchResult->groupByType() as Stype=>$modelSearchResults)

    <h2>{{ucfirst($type)}}</h2>
    @foreach($modelSearchResults as $searchResult)

        <ul>
        <li><a href="{{$searchResult->url}}"><{{$searchResult->title}}</a></li>
        </ul>
    @endforeach
  @endforeach
  
</div>


@endsection
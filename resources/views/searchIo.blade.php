@extends('layouts.app')

@section('content')

<div class="buscarResultado">

    @foreach($searchResult->groupByType() as $type=>$modelSearchResults)

    <h2>{{ucfirst($type)}}</h2>
    @foreach($modelSearchResults as $searchResult)

        <ul>
        <li><p href="{{$searchResult->url}}">{{$searchResult->title}}</p></li>
        </ul>
    @endforeach
  @endforeach
  
</div>


@endsection
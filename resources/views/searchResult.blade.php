@extends('layouts.app')

@section('content')

  <div id="container justify-content-md-center">
    <div class="row align-content-md-center">
      <div id="app">
        <div id="definicion" class="col align-self-center card" @click="showModal = true">Definicion</div>
      </div>
    <div id="lugares" class="col align-self-center card" href={{"/map"}}> Lugares</a></div>
    <div id="eventos" class="col align-self-center card"><a href={{"/"}}>Eventos</a></div>
    <div id="blog" class="col align-self-center card"><a href={{"/"}}>Blog</a></div>
    <div id="articulos" class="col align-self-center card"><a href={{"/"}}>Articulos</a></div>
    </div>
  </div>
  
  <div class="buscarResultado">
      @foreach($searchResult->groupByType() as $type=>$modelSearchResults)
        @foreach($modelSearchResults as $searchResult)
          
        <modal class="modal-content" v-if="showModal" @close="showModal = false">
            <h3 slot="header">{{ucfirst($type)}}</h3>
            <p slot="body" href="{{$searchResult->url}}">{{$searchResult->title}}</p>
          </modal>  

  </div>  
      @endforeach
    @endforeach
  </div>
@endsection



@extends('layouts.app')

@section('content')

  <div id="container justify-content-md-center">
    <div class="row align-content-md-center">
    <button id="definicion" class="col align-self-end card">definicion</button>
    <div id="lugares" class="col align-self-center card"><a href={{"/map"}}> Lugares</a></div>
    <div id="eventos" class="col card"><a href={{"/"}}>Eventos</a></div>
    <div id="blog" class="col card"><a href={{"/"}}>Blog</a></div>
    <div id="articulos" class="col card"><a href={{"/"}}>Articulos</a></div>
    </div>
  </div>
  
  
  <div id="app">
    <button id="show-modal" @click="showModal = true">Show Modal</button>
    <!-- use the modal component, pass in the prop -->
    <modal v-if="showModal" @close="showModal = false">
      
      <h3 slot="header">{{{$palabra}}}</h3>
    </modal>
  </div>

@endsection



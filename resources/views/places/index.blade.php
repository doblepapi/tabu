@extends('layouts.app')

@section('content')

<h1>¡Lugares sin Tabú! </h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">Lugares</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="/places">Todos</a></li>
        			<li><a href="/places/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Lista de lugares</h4>
  		</div>

  		<div class="panel-body">
    		<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Dirección</th>
						<th>Latitud</th>
						<th>Longitud</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($places as $place)
						<tr>
							<td>{{ $place->name }}</td>
							<td>{{ $place->Dirección }}</td>
							<td>
								<a href="/places/show/{{ $place->id }}"><span class="label label-info">Ver</span></a>
								<a href="/places/edit/{{ $place->id }}"><span class="label label-success">Editar</span></a>
								<a href="{{ url('/places/destroy',$place->id) }}"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
  	</div>

  	@if(Session::has('message'))
	    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif

@endsection
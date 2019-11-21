@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Articulos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Create un Nuevo Articulo</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Titulo</th>
            <th>Resumen</th>
            <th>Link</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Palabras Clave</th>
            <th>Dia de creacion</th>
            <th>Dia de actualizacion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articulos as $articulo)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{$articulo->titulo}}</td>
            <td>{{$articulo->resumen}}</td>
            <td>{{$articulo->link}}</td>
            <td>{{$articulo->author}}</td>
            <td>{{$articulo->year}}</td>
            <td>{{$articulo->keyWord}}</td>
            <td>{{$articulo->created_at}}</td>
            <td>{{$articulo->updated_at}}</td>
            <td>
                <form action="{{ route('articles.destroy',$articulo->id) }}" method="POST">
    
    
                    <a class="btn btn-primary" href="{{ route('articles.edit',$articulo->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </<td>
        @endforeach
    </table>
        
@endsection

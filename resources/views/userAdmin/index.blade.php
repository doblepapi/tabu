@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('userAdmin.create') }}"> Crear o Modificar un Nuevo Articulo</a>
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
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha verificacion del mail</th>
            <th>Año</th>
            <th>Tipo de Usuario</th>
            <th>Dia de creacion</th>
            <th>Dia de actualizacion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articulos as $articulo)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{$articulo->name}}</td>
            <td>{{$articulo->email}}</td>
            <td>{{$articulo->email_verified_at}}</td>
            <td>{{$articulo->year}}</td>
            <td>{{$articulo->userType}}</td>
            <td>{{$articulo->created_at}}</td>
            <td>{{$articulo->updated_at}}</td>
            <td>
                <form action="{{ route('userAdmin.destroy',$articulo->id) }}" method="POST">
    
    
                    <a class="btn btn-primary" href="{{ route('userAdmin.edit',$articulo->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </<td>
        @endforeach
    </table>
        
@endsection

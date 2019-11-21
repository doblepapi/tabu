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
            <th>Tipo de Usuario</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($userAdmin as $userAdmin)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{$userAdmin->name}}</td>
            <td>{{$userAdmin->email}}</td>
            <td>{{$userAdmin->userType}}</td>

            <td>
                <form action="{{ route('userAdmin.destroy',$userAdmin->id) }}" method="POST">
    
    
                    <a class="btn btn-primary" href="{{ route('userAdmin.edit',$userAdmin->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    
                </form>
            </td>
        </<td>
        @endforeach
    </table>
        
@endsection

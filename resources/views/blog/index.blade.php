
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New Definition</a>
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
            <th>Blog</th>
            <th>titulo</th>
            <th>resumen</th>
            <th>link</th>
            <th>author</th>
            <th>year</th>
            <th>keyWord</th>
            <th>created_at</th>
            <th>updated_at</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{$blog->titulo}}</td>
            <td>{{$blog->resumen}}</td>
            <td>{{$blog->link}}</td>
            <td>{{$blog->author}}</td>
            <td>{{$blog->year}}</td>
            <td>{{$blog->keyWord}}</td>
            <td>{{$blog->created_at}}</td>
            <td>{{$blog->updated_at}}</td> 
            <td>
                <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('blog.show',$blog->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection

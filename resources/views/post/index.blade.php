@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Definition</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Definition</a>
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
            <th>Post</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $posts)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{ $posts->body }}</td>
            <td>
                <form action="{{ route('post.destroy',$posts->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('post.show',$posts->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('post.edit',$posts->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection
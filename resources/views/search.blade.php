@extends('layouts.app')
@section('content')
<div>
    <form method= "POST" action="/searchIo">
        {{csrf_field()}}
        @csrf
        <input type="text" placeholder="Writte your search" name="searching"/>
        <input type="submit" value="Search now"/>
    </form>
</div>
@endsection
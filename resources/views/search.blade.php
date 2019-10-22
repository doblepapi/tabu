
@extends('layouts.app')

@section('content') 

            <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Writte your search" name="searching">
                <button type="submit"><i class="fa fa-search">Search now</i></button>
                </form>
            </div>

@endsection
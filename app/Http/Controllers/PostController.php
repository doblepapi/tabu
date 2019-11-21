<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;



class PostController extends Controller
{

    public function search(Request $request)
    {
        $searchResult = (new  Search())
            ->registerModel(Post::class, 'title', 'body', 'id')
            ->perform($request->input('query')); 
            //dd($searchResult);
        return view('searchResult', compact('searchResult'), ['palabra'=>$request->input('query')]);
    }

    public function index()
    {
        $posts=Post::all();
        return view('search', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('searchresult', compact('searchResult'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

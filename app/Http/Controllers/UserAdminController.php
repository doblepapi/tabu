<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAdmin = User::All();
        return view('userAdmin.index', compact('userAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userAdmin.View');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required', 
            'email'=>'required',
            'userType'=>'required' ]);
        User::create($request->all());
        return redirect()->route('userAdmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $userAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $userAdmin)
    {
        return view('userAdmin.edit', compact('userAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $userAdmin)
    {
        $request->validate([
            'name'=>'required', 
            'email'=>'required',
            'userType'=>'required' ]);
        $userAdmin->update($request->all());
        return redirect()->route('userAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $userAdmin)
    {
        $userAdmin->delete();
        return redirect()->route('userAdmin.index')->with('success', 'Product deleted successfully');
  
    }
}

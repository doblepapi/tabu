<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show($id)
    {
        return view('admin.profile', ['admin' => User::findOrFail($userType)]);
    }
}

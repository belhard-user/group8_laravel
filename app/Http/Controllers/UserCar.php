<?php

namespace App\Http\Controllers;

use App\Mods;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserCar extends Controller
{
    public function add()
    {
        $marksList = \App\Mark::pluck('title', 'id');
        
        return view('user.add', compact('marksList'));
    }

    public function store(Request $request)
    {
        Mods::create($request->all());

        flash('success', 'Авто');

        return redirect()->route('home');
    }
}

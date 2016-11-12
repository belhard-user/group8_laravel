<?php

namespace App\Http\Controllers;

use App\Mods;
use App\Http\Requests\ModsRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserCar extends Controller
{
    public function add()
    {
        $marksList = \App\Mark::pluck('title', 'id');
        
        return view('user.add', compact('marksList'));
    }

    public function store(ModsRequest $request)
    {
        $car = auth()->user()->mods()->create($request->all());

        flash('success', 'Теперь добавте фотографии к автомобилю');

        return redirect()->route('add.photo', ['car' => $car->id]);
    }

    public function addPhoto(Mods $car)
    {
        return view('car.photo', compact('car'));
    }

    public function storePhoto(Mods $car, Request $request)
    {
        $user = auth()->user();
        $file = '';
        if($user->can('upload-photo', $car)) {
            $file = $request->file('file');

            $file = $file->store(auth()->id(), 'public');

            $car->photos()->create([
                'path' => $file
            ]);
        }

        return $file;
    }
}

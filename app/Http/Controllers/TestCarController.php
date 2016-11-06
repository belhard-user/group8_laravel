<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\BrandRequest;
use App\Mark;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestCarController extends Controller
{
    public function showBrandForm()
    {
        return view('car.showForm');
    }

    public function addBrands(BrandRequest $request)
    {
        Brand::create($request->all());

        return redirect()->back();
    }

    public function showMarkForm()
    {
        $brandList = Brand::orderBy('title')->pluck('title', 'id');
        
        return view('car.showMarkForm', compact('brandList'));
    }

    public function addMark(Request $request)
    {
        Mark::create($request->all());

        return redirect()->back();
    }
}

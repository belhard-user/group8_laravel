<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestCarController extends Controller
{
    public function showBrandForm()
    {
        return view('car.showForm');
    }

    public function addBrands(Request $request)
    {
        $this->addRecords('brands', $request);

        return redirect()->back();
    }

    public function showMarkForm()
    {
        $brandList = DB::table('brands')->orderBy('title')->pluck('title', 'id');
        
        return view('car.showMarkForm', compact('brandList'));
    }

    public function addMark(Request $request)
    {
        $this->addRecords('marks', $request);

        return redirect()->back();
    }

    private function addRecords($tblName, Request $request)
    {
        return DB::table($tblName)->insert($request->except('_token'));
    }
}

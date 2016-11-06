<?php

namespace App\Http\Controllers;

use App\Mods;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $items = Mods::with('mark', 'mark.brand')->paginate(6);

        return view('home.home', compact('items'));
    }

    public function about()
    {
        
    }
}

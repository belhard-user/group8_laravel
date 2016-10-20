<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function home()
    {
        $names = [
            '<h1>Neo</h1>',
            'Morpheus',
            'Tank',
            'Trinity',
            'Dozer',
            'Smith'
        ];
        
        sort($names);

        return view('home', compact('names'))/*->withNames($names)->withAge(23)*/;
    }

    public function about()
    {
        $templateName = rand(0, 1) ? 'test' : 'test2';
        return view('about', compact('templateName'));
    }
}

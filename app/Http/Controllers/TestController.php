<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Testdrive;
use App\Testdrive2;
use Debugbar;
use Illuminate\Http\Request;

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

    public function model()
    {
        // $model = Testdrive::findOrFail(34);

        /*$model = new Testdrive();
        $model->email = 'f@f.com';
        $model->name = 'FFF';
        $model->age = 333;

        $model->save();*/

        /*$model = Testdrive::firstOrNew([
            'email' => 'f3@f.com',
            'name' => 'FFF',
            'age' => 333
        ]);

        $model->save();*/

        // $model = Testdrive::youngMan()->first();

//        echo $model->user_email;
//
//        die();

        return view('test2');
    }

    public function postModel(TestRequest $r)
    {
        Testdrive::create($r->all());

        return redirect()->back();
    }

    public function testdrive()
    {
        $testdrive = Testdrive::paginate(5);
        
        return view('testdrive', ['testdrive' => $testdrive]);
    }

    public function relations()
    {
        /*$test = Testdrive::with('addresses')->get();

        foreach ($test as $item) {
            if($item->addresses->isEmpty()){
                continue;
            }

            echo $item->email . ' has ';
            foreach ($item->addresses as $address){
                echo '<br>' . $address->address;
            }

            echo "<hr>";
        }
        echo "<hr>";
        echo "<hr>";
        echo "<hr>";
        echo "<hr>";
        echo "<hr>";*/

        $test2 = Testdrive2::all();

        foreach ($test2 as $item){
            echo $item->address . ' владелец ' . $item->myMaster->name . '<br>';
        }
        // return view('welcome');
    }

    public function addRelations()
    {
        $postData = [
            'address' => 'Мельникайте 4'
        ];

        Testdrive::find(1)->addAddress($postData);

        return view('welcome');
    }
}

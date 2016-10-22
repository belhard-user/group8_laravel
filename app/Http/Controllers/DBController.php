<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class DBController extends Controller
{
    public function insert()
    {
        $persons = [
            ['email' => 'tank@gmail.com', 'name' => 'Tank', 'age' => 24, 'updated_at' => new \DateTime(), 'created_at' => new \DateTime()],
            ['email' => 'tank2@gmail.com', 'name' => 'Tank2', 'age' => 25, 'updated_at' => new \DateTime(), 'created_at' => new \DateTime()],
            ['email' => 'tank3@gmail.com', 'name' => 'Tank3', 'age' => 26, 'updated_at' => new \DateTime(), 'created_at' => new \DateTime()],
            ['email' => 'tank4@gmail.com', 'name' => 'Tank4', 'age' => 27, 'updated_at' => new \DateTime(), 'created_at' => new \DateTime()],
        ];

        DB::table('testdrive')->insert($persons);

        return view('layouts.app');
    }

    public function delete()
    {
        // $cnt = DB::table('testdrive')->delete(); delete all records
        $cnt = DB::table('testdrive')->whereIn('id', [48, 49])->delete();
        echo $cnt;
        
        return view('layouts.app');
    }
}

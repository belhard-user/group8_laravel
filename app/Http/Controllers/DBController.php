<?php

namespace App\Http\Controllers;

use ClassesWithParents\D;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class DBController extends Controller
{
    public function select()
    {
        // $testdrive = DB::table('testdrive')->select('email')->get();
        // $testdrive = DB::table('testdrive')->whereIn('id', [38, 45])->get();
//        $testdrive = DB::table('testdrive')->whereBetween('id', [38, 45])->get();

//        $testdrive = DB::table('testdrive')
//            ->whereNotIn('id', [38, 45])
//            ->where('id', '!=', 39)
//            ->orderBy('id', 'DESC')
//            ->take(3)
//            ->get();

        // $testdrive = DB::table('testdrive')->skip(5)->take(3)->get();
//        $testdrive = DB::table('testdrive')->where(function($query){
//            $query->where('id', '>', 40);
//        })->get();

        // $testdrive = DB::table('testdrive')->whereRaw('id > 50')->get();
        // $testdrive = DB::table('testdrive')->max('age');
        $testdrive = DB::table('testdrive')->whereAgeOrEmail(222, 'a@a.com')->get();

        \Debugbar::info($testdrive);

        return view('layouts.app');
    }
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

    public function update()
    {
        $cnt = DB::table('testdrive')->where('email', 'like',  '%mail.com')->update([
            'email' => 'a@a.com',
            'age' => 222
        ]);

        echo $cnt;

        return view('layouts.app');
    }

    public function forms()
    {
        return view('db.forms');
    }

    public function postForm(Request $request)
    {
        DB::table('testdrive')->insert($request->except('_token'));

        return redirect()->back();
    }
}

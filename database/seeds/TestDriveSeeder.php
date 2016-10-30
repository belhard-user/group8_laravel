<?php

use App\Testdrive;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TestDriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testdrive::truncate();
        factory(Testdrive::class, 100)->create();
//        $faker = Factory::create();
//
//        for($i = 0; $i < 100; $i++){
//            $date = $faker->dateTimeBetween('-10 years', 'now');
//
//            Testdrive::create([
//                'email' => $faker->email,
//                'name' => $faker->name,
//                'age' => $faker->numberBetween(18, 60),
//                'msg' => $faker->text(10000),
//                'my_time' => $date,
//                'created_at' => $date,
//                'updated_at' => $date
//            ]);
//        }
    }
}

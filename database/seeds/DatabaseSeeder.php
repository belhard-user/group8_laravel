<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestDriveSeeder::class);
        $this->call(BrandsSeed::class);
        // $this->call(UsersTableSeeder::class);
    }
}

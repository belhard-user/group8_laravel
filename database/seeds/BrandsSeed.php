<?php

use Illuminate\Database\Seeder;

class BrandsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::truncate();
        
        foreach ($this->getBrands() as $brand){
            \App\Brand::create([
                'title' => $brand
            ]);
        }
    }

    private function getBrands()
    {
        return [
            'BMW',
            'Audi',
            'Acura',
            'Ford',
            'Opel',
            'Mercedes',
            'Ferrari',
            'Toyota',
            'Nissan'
        ];
    }
}

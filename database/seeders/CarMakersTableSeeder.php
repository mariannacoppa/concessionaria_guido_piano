<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CarMaker;

class CarMakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_makers = config("car_makers");

        foreach ($car_makers as $car_maker) {
            $new_car_maker = new CarMaker();

            $new_car_maker->phone = $car_maker['phone'];
            $new_car_maker->company = $car_maker['company'];
            $new_car_maker->address = $car_maker['address'];

            $new_car_maker->save();
        }
    }
}

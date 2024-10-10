<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = config("cars");

        foreach ($cars as $car) {
            $new_car = new Car();

            $new_car->brand = $car['brand'];
            $new_car->model = $car['model'];
            $new_car->year = $car['year'];
            $new_car->color = $car['color'];
            $new_car->price = $car['price'];
            $new_car->engine = $car['engine'];
            $new_car->horsepower = $car['horsepower'];
            $new_car->doors = $car['doors'];
            $new_car->km = $car['km'];
            $new_car->used = $car['used'];

            $new_car->save();
        }
    }
}

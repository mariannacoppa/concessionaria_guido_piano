<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Optional;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = config("optionals");

        foreach ($optionals as $optional) {
            $new_optional = new Optional();

            $new_optional->price = $optional['price'];
            $new_optional->name = $optional['name'];

            $new_optional->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Resellers;

class ResellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $resellers = config("resellers");

        foreach ($resellers as $reseller) {
            $new_reseller = new Resellers();
            
            $new_reseller->phone = $reseller['phone'];
            $new_reseller->company = $reseller['company'];
            $new_reseller->address = $reseller['address'];

            $new_reseller->save();
        }       
    }
}

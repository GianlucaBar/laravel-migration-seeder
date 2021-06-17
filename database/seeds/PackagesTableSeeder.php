<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newPackage = new Package();
            $newPackage->name = $faker->sentence(3);
            $newPackage->description = $faker->paragraph();
            $newPackage->price = $faker->randomFloat(1, 20, 30);
            $newPackage->hotel_name = $faker->sentence(3);
            $newPackage->hotel_stars = $faker->numberBetween(1, 5);
            $newPackage->outbound_flight = $faker->dateTimeBetween('now', '+4 months');
            $newPackage->return_flight = $faker->dateTimeBetween('now', '+4 months');
            $newPackage->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_travel = new Travel();

            $new_travel->city = $faker->city();
            $new_travel->country = $faker->country();
            $new_travel->locality_description = $faker->paragraph(5, true);
            $new_travel->hotel = $faker->company();
            $new_travel->rating_stars = rand(4, 5);
            $new_travel->hotel_address = $faker->streetAddress();
            $new_travel->room_number = rand(1, 300);
            $new_travel->price = $faker->randomFloat(2, 100, 2999);
            $new_travel->save();
        }
    }
}
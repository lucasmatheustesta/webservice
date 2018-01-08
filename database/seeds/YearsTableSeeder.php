<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Year;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $i) {
        	Year::create([
        		'title' => $faker->randomDigitNotNull() .'º ano'
        	]);
        }
    }
}

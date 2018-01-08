<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\School;
use App\City;

class SchoolsTableSeeder extends Seeder
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
        	$city = City::where('state_id', 35)->orderByRaw('RAND()')->first();
        	School::create([
				'name' => $faker->sentence(),
				'email' => $faker->unique()->email(),
				'address' => $faker->streetAddress(),
				'phone' => $faker->e164PhoneNumber(),
				'validity' => $faker->date('Y-m-d'),
				'logotype' => $faker->imageUrl(300,300),
				'contact' => $faker->name('male'),
				'student_code' => $faker->unique()->uuid() ,
				'teacher_code' => $faker->unique()->uuid() ,
				'state_id' => 35,
				'citie_id' => $city->id
        	]);
        }
    }
}

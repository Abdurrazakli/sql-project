<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class TeacherDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $numberOfFakeData = 25;
        for ($i = 0; $i < 25; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'adress' => $faker->address,
                'numberOfStudents' => $faker->numberBetween(21, 121)
            ]);
        }
    }
}

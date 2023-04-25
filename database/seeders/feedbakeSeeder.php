<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class feedbakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for($i = 0; $i<=20;$i++)
        {
            DB::table('feedback')->insert([
                'Name' => $faker->name(),
                'Rating' => $faker->numberBetween($min=1,$max=5),
                'feedback_details' => $faker->text(50),
                'feedback_date' => $faker->date()
                ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $a = 0;
        while ($a <= 1000) {
            DB::table('phonebooks')->insert([
                'name' => $faker->name(),
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber,
            ]);
            $a++;
        }
    }
}

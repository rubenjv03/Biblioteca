<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $lastInsertedId = DB::table("categories")->max("id");
        for ($i = $lastInsertedId; $i < $lastInsertedId+10; $i++) {
            DB::table("categories")->insert(
                [
                    "name"=>$faker->name,
                    "created_at"=>$faker->dateTime(),
                    "updated_at"=>$faker->dateTime()
                ]
            );
        }
    }
}

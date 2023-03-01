<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $lastInsertedId = DB::table("books")->max("id");
        for ($i = $lastInsertedId; $i < $lastInsertedId+10; $i++) {
            DB::table("books")->insert(
                [
                    "isbn"=> $faker->unique()->isbn10,
                    "title"=>$faker->sentence(4),
                    "author"=>$faker->name,
                    "published_date"=>$faker->date(),
                    "description"=>$faker->paragraph,
                    "price"=>$faker->randomFloat(2,0,100),
                    "created_at"=>$faker->dateTime(),
                    "updated_at"=>$faker->dateTime()
                ]
            );
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
       foreach (range(1,10)as $index){
           DB::table('posts')->insert([
               'description'=>$faker->text(30),
               'name'=>$faker->text(30),
               'price'=>$faker->numberBetween(20,100),
               'date'=>$faker->date,
               'time'=>$faker->time,
           ]);
       } 
    }
}

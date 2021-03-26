<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pizza;

class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i=0;$i<10;$i++){
        $pizza = new Pizza();
        $pizza->img_path ='path';
        $pizza->name = $faker->name();
        $pizza->ingredients = $faker->word();
        $pizza->price = rand(5,10);
        $pizza->description = $faker->sentence();
        $pizza->peso =rand(2,10);
        $pizza->save();
      }
    }
}

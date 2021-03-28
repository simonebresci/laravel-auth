<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pizza;
class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker) //Funziona grazie ad Autowiring Laravel
     {
         for($i=0;$i<10;$i++){
           $pizza = new Pizza();
           $pizza->img_path = "https://img.icons8.com/ios/452/pizza.png";
           $pizza->name = $faker->name();
           $pizza->ingredients = $faker->word();
           $pizza->price = $faker->randomDigit();
           $pizza->description = $faker->text();
           $pizza->peso = $faker->randomDigit();
           $pizza->save();
         }
     }
}

<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();

        $catdata = [
    'Men\'s Clothing' => ['Leather Jacket', 'Formal White Shirt'],
    'Woman Clothing' => ['Floral Kurti', 'Trendy New pallazo'],
    'Kids' => ['Pink Romper', 'Frock','Cute Set','Hair Clips'],
    'Beauty'=> ['Lipstick', 'Eyeliner','Kajal'],
];
     foreach ($catdata as $category => $products)
{
    $id = Category::create(['name' => $category])->id;

    foreach ($products as $product) {
        Product::create([
            'sku' => $faker->unique()->md5,
            'name' => $product,
            'price' =>  $faker->numberBetween($min = 1, $max = 1000),
                'description' =>  $faker->text,
                'category_id' =>  $id,
                'UnitsInStock' =>  $faker->numberBetween($min = 1, $max = 50),
        ]);
    }
}
       /* foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'sku' => $faker->unique()->md5,
                'Name' => $faker->word,
                'price' =>  $faker->numberBetween($min = 1, $max = 1000),
                'description' =>  $faker->text,
                'category_id' =>  $faker->word,
                'UnitsInStock' =>  $faker->numberBetween($min = 1, $max = 50),
            ]);
        }*/
    }
}

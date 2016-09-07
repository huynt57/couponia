<?php

use Illuminate\Database\Seeder;

class DealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 200;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('accounts')->insert([
                'uid' => $faker->unique()->numberBetween(1111111, 9999999),
                'username' => $faker->unique()->name,
                'password' => bcrypt(str_random(10)),
                'email' => $faker->unique()->email,
                'remember_token' => str_random(10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);

            DB::table('categories')->insert([
                'name' => $faker->unique()->name,
                'desc' => $faker->text,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);

            $accounts = \App\Account::all()->pluck('id')->toArray();
            $categories = \App\Category::all()->pluck('id')->toArray();

            DB::table('deals')->insert([
                'name' => $faker->unique()->name,
                'account_id' => $faker->randomElement($accounts),
                'description' => $faker->text,
                'valid_from' => $faker->dateTimeBetween('-2 months', 'now'),
                'valid_to' => $faker->dateTimeBetween('now', '+2 months'),
                'original_price'=>$faker->numberBetween(100000, 200000),
                'new_price'=>$faker->numberBetween(10000, 100000),
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'location' => $faker->locale,
                'is_hot' => $faker->numberBetween(0, 1),
                'code' => str_random(5),
                'online_url' => $faker->url,
                'image_preview' => $faker->imageUrl(800, 600),
                'status' => $faker->numberBetween(0, 1),
                'category_id' =>$faker->randomElement($categories),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}

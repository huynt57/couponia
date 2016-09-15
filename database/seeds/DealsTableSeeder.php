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


        DB::table('providers')->insert([
            'name' => 'Lazada',
            'alias' => 'lazada',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'FPT Shop',
            'alias' => 'fptshop',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Adayroi.com',
            'alias' => 'adayroi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Tiki.vn',
            'alias' => 'tiki',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Atadi.vn',
            'alias' => 'atadi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Lazada Mobile App',
            'alias' => 'lazada-mobile',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Lazada Mobile App',
            'alias' => 'lazada-mobile',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('providers')->insert([
            'name' => 'Lazada Mobile App',
            'alias' => 'lazada-mobile',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'NguyenKim.com',
            'alias' => 'nguyenkim',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'cfyc.com.vn',
            'alias' => 'cfyc',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Kay.vn',
            'alias' => 'kayvn',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'Fado.vn',
            'alias' => 'fado',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'VnTrip.vn',
            'alias' => 'vntrip',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('providers')->insert([
            'name' => 'BigMua.com',
            'alias' => 'bigmua',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        ]);
        



        $limit = 200;
        for ($i = 0; $i < 11; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->unique()->name,
                'desc' => $faker->text,
                'provider' => 1,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }

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
                'source' => $faker->randomElement(['lazada', 'adayroi', 'tiki', 'zalora'])
            ]);
        }
    }
}

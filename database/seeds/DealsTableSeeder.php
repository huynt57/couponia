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
            'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'FPT Shop',
            'alias' => 'fptshop',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Adayroi.com',
            'alias' => 'adayroi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Tiki.vn',
            'alias' => 'tiki',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Atadi.vn',
            'alias' => 'atadi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Lazada Mobile App',
            'alias' => 'lazada-mobile',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);


        DB::table('providers')->insert([
            'name' => 'NguyenKim.com',
            'alias' => 'nguyenkim',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'cfyc.com.vn',
            'alias' => 'cfyc',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Kay.vn',
            'alias' => 'kayvn',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Fado.vn',
            'alias' => 'fado',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'VnTrip.vn',
            'alias' => 'vntrip',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'BigMua.com',
            'alias' => 'bigmua',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);


        DB::table('providers')->insert([
            'name' => 'VienthongA',
            'alias' => 'vienthonga',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Trung tâm điện máy HC',
            'alias' => 'hccenter',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Dealtoday.vn',
            'alias' => 'dealtoday',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);

        DB::table('providers')->insert([
            'name' => 'Juno.vn',
            'alias' => 'juno',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => ''
        ]);




        $limit = 150;
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


        }
    }
}

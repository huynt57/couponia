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

//init providers

        DB::table('providers')->insert([
            'name' => 'Lazada',
            'alias' => 'lazada',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/assets/image/partner/lazada_icon.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'FPT Shop',
            'alias' => 'fptshop',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/09/14/Untitled-1eux2G.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'Adayroi.com',
            'alias' => 'adayroi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/images/offer/adayroi.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'Tiki.vn',
            'alias' => 'tiki',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/images/offer/tiki.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'Atadi.vn',
            'alias' => 'atadi',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/07/28/atadiRqBL.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'Lazada Mobile App',
            'alias' => 'lazada-mobile',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/assets/image/partner/lazada_icon.jpg'
        ]);


        DB::table('providers')->insert([
            'name' => 'NguyenKim.com',
            'alias' => 'nguyenkim',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/images/offer/nguyenkim.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'cfyc.com.vn',
            'alias' => 'cfyc',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/08/23/logofinesseQgIc.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'Kay.vn',
            'alias' => 'kayvn',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/05/25/kayvn7VXYR.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'Fado.vn',
            'alias' => 'fado',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/06/20/fado5ywH9.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'VnTrip.vn',
            'alias' => 'vntrip',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/05/25/vntrip2PxN.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'BigMua.com',
            'alias' => 'bigmua',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/07/11/logo-bigmuaBJMSH.png'
        ]);


        DB::table('providers')->insert([
            'name' => 'VienthongA',
            'alias' => 'vienthonga',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/04/07/vienthongazO0mJ.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'Điện máy HC',
            'alias' => 'hcenter',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/05/16/lg-hc-200x200yR9wj.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'Dealtoday.vn',
            'alias' => 'dealtoday',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/05/31/dealtodayxVwtB.jpg'
        ]);

        DB::table('providers')->insert([
            'name' => 'Juno.vn',
            'alias' => 'juno',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'image_preview' => 'https://pub.masoffer.com/images/offer/juno_icon.png'
        ]);

        DB::table('providers')->insert([
            'name' => 'Shop tre tho',
            'alias' => 'shoptretho',
            'status' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 'image_preview' => 'https://masoffer.r.worldssl.net/stg/images/2016/09/13/Logo-409x3153AMoY.png'
        ]);




        for ($i = 0; $i < 100; $i++) {
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

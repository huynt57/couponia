<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //init categories tiki

        DB::table('categories')->insert([
            'name' => 'Sách',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('categories')->insert([
            'name' => 'Nhà Cửa - Đời Sống',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('categories')->insert([
            'name' => 'Làm đẹp - Sức khỏe',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Thiết Bị Số - Phụ Kiện Số',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Đồ Chơi - Thời Trang Phụ Kiện Mẹ Bé',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Thời Trang',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Mẹ Và Bé',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Văn Phòng Phẩm - Quà Tặng',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Điện Gia Dụng',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('categories')->insert([
            'name' => 'English Books',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Tivi – Thiết bị nghe nhìn',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Máy vi tính & Laptop',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Thể Thao & Dã Ngoại',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('categories')->insert([
            'name' => 'Máy Ảnh - Máy Quay Phim',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Bách Hóa Online',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Điện Thoại - Máy Tính Bảng',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Ebook',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'tiki')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        //Category adayroi

        DB::table('categories')->insert([
            'name' => 'ĐIỆN MÁY & CÔNG NGHỆ',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'MẸ & BÉ',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'NHÀ CỬA & ĐỜI SỐNG',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Sách, VPP & Âm nhạc',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'SỨC KHỎE & SẮC ĐẸP',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'THỜI TRANG',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('categories')->insert([
            'name' => 'THỰC PHẨM',
            'desc' => '',
            'provider' => \App\Provider::where('alias', 'adayroi')->first()->id,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        $lazadas = ['Automotive & Gadgets',
            'Baby & Toddler',
            'Beauty Tools',
            'Cameras',
            'Computer Accessories',
            'Computers & Laptops',
            'Fashion',
            'Fragrances',
            'Furniture',
            'Gadgets',
            'Groceries',
            'Health & Beauty',
            'Home Appliances',
            'Home Improvement',
            'Home & Living',
            'Laptops',
            'Large Appliances',
            'Media, Music & Books',
            'Mobiles & Tablets',
            'Network Components',
            'Skin Care',
            'Sports & Outdoors',
            'Storage',
            'Toys & Games',
            'Travel & Luggage',
            'TV, Audio / Video, Gaming & Wearables',
            'Vouchers and Services',
            'Watches Eyewear Jewellery'];

        foreach($lazadas as $lazada)
        {
            DB::table('categories')->insert([
                'name' => $lazada,
                'desc' => '',
                'provider' => \App\Provider::where('alias', 'lazada')->first()->id,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Đồ chơi xếp hình cảnh sát',
                'price'=> '142.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>2,
                'name'=>'Xe ôtô biến hình',
                'price'=> '135.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>3,
                'name'=>'Đồ chơi trống xúc xắc có nhạc đèn',
                'price'=> '82.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>4,
                'name'=>'Bảng gỗ chữ cái cao cấp',
                'price'=> '99.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>5,
                'name'=>'Đàn nhạc hình con vịt',
                'price'=> '149.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>6,
                'name'=>'Đồ chơi câu cá 2in1 chim cánh cụt',
                'price'=> '295.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>7,
                'name'=>'Đồ chơi nồi cơm điện dễ thương',
                'price'=> '405.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>8,
                'name'=>'Đồ chơi mô hình động vật cho bé',
                'price'=> '142.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>9,
                'name'=>'Đồ chơi robot vui nhộn có nhạc đèn',
                'price'=> '131.000',
                'created_at'=> Carbon::now()
            ],[
                'id'=>10,
                'name'=>'Cặp đồ chơi sinh vật biển',
                'price'=> '148.000',
                'created_at'=> Carbon::now()
            ]
        ]);

    }
}

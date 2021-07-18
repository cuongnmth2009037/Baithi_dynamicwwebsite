<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS = 0');
       DB::table('customers')->truncate();
       DB::table('customers')->insert([
           [
                'id'=>1,
                'name'=> 'Ngọc',
                'address'=>'Nam Từ Liêm,Tp.Hà Nội',
                'created_at'=> Carbon::now()
           ],[
               'id'=>2,
               'name'=> 'Khoa',
               'address'=>'Phùng Hưng,Hà Đông,Tp.Hà Nội',
               'created_at'=> Carbon::now()
           ],[
               'id'=>3,
               'name'=> 'Linh',
               'address'=>'Tam Thanh,Tp.Lạng Sơn',
               'created_at'=> Carbon::now()
           ],[
               'id'=>4,
               'name'=> 'Trung',
               'address'=>'Bùi Viện,Tp.Hồ Chí Minh',
               'created_at'=> Carbon::now()
           ],[
               'id'=>5,
               'name'=> 'Lan Anh',
               'address'=>'Sơn Trà,Tp.Đà Nẵng',
               'created_at'=> Carbon::now()
           ]
       ]);
    }
}

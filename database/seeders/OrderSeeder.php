<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id'=>1,
                'customerID'=>1,
                'created_at'=> Carbon::now()
            ],[
                'id'=>2,
                'customerID'=>2,
                'created_at'=> Carbon::now()
            ],[
                'id'=>3,
                'customerID'=>3,
                'created_at'=> Carbon::now()
            ],[
                'id'=>4,
                'customerID'=>4,
                'created_at'=> Carbon::now()
            ],[
                'id'=>5,
                'customerID'=>5,
                'created_at'=> Carbon::now()
            ],[
                'id'=>6,
                'customerID'=>6,
                'created_at'=> Carbon::now()
            ],[
                'id'=>7,
                'customerID'=>7,
                'created_at'=> Carbon::now()
            ],[
                'id'=>8,
                'customerID'=>8,
                'created_at'=> Carbon::now()
            ],[
                'id'=>9,
                'customerID'=>9,
                'created_at'=> Carbon::now()
            ],[
                'id'=>10,
                'customerID'=>10,
                'created_at'=> Carbon::now()
            ]
        ]);
    }
}

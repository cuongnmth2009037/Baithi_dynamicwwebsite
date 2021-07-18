<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'oderId'=>1,
                'productID'=>1,
                'quantity'=>2,
                'amount'=>284.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>2,
                'productID'=>2,
                'quantity'=>3,
                'amount'=>405.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>3,
                'productID'=>3,
                'quantity'=>4,
                'amount'=>328.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>4,
                'productID'=>4,
                'quantity'=>5,
                'amount'=>495.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>5,
                'productID'=>5,
                'quantity'=>6,
                'amount'=>894.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>6,
                'productID'=>6,
                'quantity'=>2,
                'amount'=>590.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>7,
                'productID'=>2,
                'quantity'=>7,
                'amount'=>945.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>8,
                'productID'=>8,
                'quantity'=>2,
                'amount'=>284.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>9,
                'productID'=>9,
                'quantity'=>5,
                'amount'=>655.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>10,
                'productID'=>10,
                'quantity'=>4,
                'amount'=>592.000,
                'created_at'=> Carbon::now()
            ], [
                'oderId'=>10,
                'productID'=>9,
                'quantity'=>4,
                'amount'=>524.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>9,
                'productID'=>8,
                'quantity'=>2,
                'amount'=>284.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>8,
                'productID'=>7,
                'quantity'=>2,
                'amount'=>810.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>7,
                'productID'=>6,
                'quantity'=>3,
                'amount'=>879.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>6,
                'productID'=>5,
                'quantity'=>4,
                'amount'=>596.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>5,
                'productID'=>4,
                'quantity'=>5,
                'amount'=>495.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>4,
                'productID'=>3,
                'quantity'=>6,
                'amount'=>492.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>3,
                'productID'=>2,
                'quantity'=>4,
                'amount'=>540.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>2,
                'productID'=>1,
                'quantity'=>5,
                'amount'=>710.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>1,
                'productID'=>9,
                'quantity'=>7,
                'amount'=>917.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>5,
                'productID'=>1,
                'quantity'=>3,
                'amount'=>426.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>4,
                'productID'=>2,
                'quantity'=>5,
                'amount'=>675.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>3,
                'productID'=>1,
                'quantity'=>7,
                'amount'=>994.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>6,
                'productID'=>9,
                'quantity'=>2,
                'amount'=>262.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>5,
                'productID'=>8,
                'quantity'=>6,
                'amount'=>852.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>4,
                'productID'=>7,
                'quantity'=>2,
                'amount'=>810.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>3,
                'productID'=>6,
                'quantity'=>2,
                'amount'=>590.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>2,
                'productID'=>7,
                'quantity'=>1,
                'amount'=>405.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>1,
                'productID'=>2,
                'quantity'=>3,
                'amount'=>405.000,
                'created_at'=> Carbon::now()
            ],[
                'oderId'=>4,
                'productID'=>5,
                'quantity'=>6,
                'amount'=>894.000,
                'created_at'=> Carbon::now()
            ],

        ]);

    }
}

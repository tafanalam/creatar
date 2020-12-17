<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'product_id' => '1',
            'productdetails_id' => '1',
            'productname' => 'Fender Strato Caster',
            'productdescription' => 'E03'
        ]);

    }
}

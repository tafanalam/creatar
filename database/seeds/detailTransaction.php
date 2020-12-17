<?php

use Illuminate\Database\Seeder;

class detailTransaction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailTransaction')->insert([
            'ProductQty' => '1'
        ]);

    }
}

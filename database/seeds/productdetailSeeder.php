<?php

use Illuminate\Database\Seeder;

class productdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headstock')->insert([
            'headstock_id' => '1',
            'headstockname' => 'Natural',
            'headstockphoto' => 'asset/strat/hs_nat.png'
        ]);

        DB::table('headstock')->insert([
            'headstock_id' => '2',
            'headstockname' => 'Black',
            'headstockphoto' => 'asset/strat/hs_black.png'
        ]);

        DB::table('tuningpeg')->insert([
            'tuningpeg_id' => '1',
            'tuningpegname' => 'Chrome',
            'tuningpegphoto' => 'asset/strat/tp_chrome.png'
        ]);

        DB::table('tuningpeg')->insert([
            'tuningpeg_id' => '2',
            'tuningpegname' => 'Black',
            'tuningpegphoto' => 'asset/strat/tp_black.png'
        ]);

        DB::table('fingerboard')->insert([
            'fingerboard_id' => '1',
            'fingerboardname' => 'Maple',
            'fingerboardphoto' => 'asset/strat/fb_maple.png'
        ]);

        DB::table('fingerboard')->insert([
            'fingerboard_id' => '1',
            'fingerboardname' => 'Rosewood',
            'fingerboardphoto' => 'asset/strat/fp_rw.png'
        ]);

        DB::table('finish')->insert([
            'finishname' => 'Black'
        ]);

        DB::table('pickguardmaterial')->insert([
            'pickguardmaterial_id' => '1',
            'pickguardmaterialname' => 'White',
            'pickguardmaterialphoto' => 'asset/strat/pg_white.png'
        ]);

        DB::table('pickguardmaterial')->insert([
            'pickguardmaterial_id' => '1',
            'pickguardmaterialname' => 'Bronze',
            'pickguardmaterialphoto' => 'asset/strat/pg_bronze.png'
        ]);

        DB::table('headstocklogo')->insert([
            'headstocklogoname' => 'Default'
        ]);

        DB::table('body')->insert([
            'body_id' => '1',
            'bodyphoto' => 'asset/strat/strat_overlay.png'
        ]);

        DB::table('accessories')->insert([
            'body_id' => '1',
            'accesoriesphoto' => 'asset/strat/strat_acc.png'
        ]);
    }
}

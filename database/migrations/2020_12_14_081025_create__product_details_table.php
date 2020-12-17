<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('headstock');
            $table->string('tuningpeg');
            $table->string('fingerboard');
            $table->string('finish');
            $table->string('pickguardmaterial');
            $table->string('headstocklogo');
            $table->string('accessories');
            $table->string('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product_details');
    }
}

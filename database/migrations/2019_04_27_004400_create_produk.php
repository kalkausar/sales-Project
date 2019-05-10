<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_product', function (Blueprint $table) {
      $table->increments('product_id');
      $table->string('product_name',55);
      $table->string('product_image');
      $table->string('product_desc');
      $table->timestamps();
      $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('tb_produk');
    }
}

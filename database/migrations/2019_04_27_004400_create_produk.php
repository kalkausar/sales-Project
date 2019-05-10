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
      Schema::create('tb_produk', function (Blueprint $table) {
      $table->increments('id_produk');
      $table->string('nama_produk',55);
      $table->string('image_produk');
      $table->string('deskripsi');
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

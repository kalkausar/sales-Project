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
      $table->increments('id');
      $table->string('product_name',55);
      $table->string('product_image')->nullable();
      $table->longText('product_desc')->nullable();
      $table->string('product_type')->nullable();
      $table->string('tipe_mesin',55)->nullable();
      $table->string('isi_silinder')->nullable();
      $table->string('torsi')->nullable();
      $table->string('bahan_bakar_jenis')->nullable();
      $table->string('bahan_bakar_sistem')->nullable();
      $table->string('kapasitas_tangki')->nullable();
      $table->string('diameterXlangkah',20)->nullable();
      $table->string('dayaMax',15)->nullable();
      $table->string('panjang')->nullable();
      $table->string('lebar')->nullable();
      $table->string('tinggi')->nullable();
      $table->string('jarak_sumbu')->nullable();
      $table->string('pijak_depan')->nullable();
      $table->string('pijak_belakang')->nullable();
      $table->string('jarak_terendah')->nullable();
      $table->string('ukuran_ban')->nullable();
      $table->string('transmisi',15)->nullable();
      $table->string('rasio1',5)->nullable();
      $table->string('rasio2',5)->nullable();
      $table->string('rasio3',5)->nullable();
      $table->string('rasio4',5)->nullable();
      $table->string('rasio5',5)->nullable();
      $table->string('rasio_reverse',5)->nullable();
      $table->string('rasio_akhir',5)->nullable();
      $table->string('suspensi_depan',55)->nullable();
      $table->string('suspensi_belakang',55)->nullable();
      $table->string('rem_depan',25)->nullable();
      $table->string('rem_belakang',25)->nullable();
      $table->string('sistem_rem',25)->nullable();
      $table->string('sistem_penggerak',25)->nullable();
      $table->integer('harga_barang');

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

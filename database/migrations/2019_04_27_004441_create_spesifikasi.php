<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpesifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_spesifikasi', function (Blueprint $table) {
          $table->increments('id_spec_produk');
          $table->string('tipe_mesin',55);
          $table->integer('isi_silinder');
          $table->integer('torsi');
          $table->integer('bahan_bakar');
          $table->integer('kapasitas_tangki');
          $table->string('diameterXlangkah',20);
          $table->string('dayaMax',15);
          $table->integer('panjang');
          $table->integer('lebar');
          $table->integer('tinggi');
          $table->integer('jarak_sumbu');
          $table->integer('pijak_depan');
          $table->integer('pijak_belakang');
          $table->integer('jarak_terendah');
          $table->tinyInteger('ukuran_ban');
          $table->string('transmisi',15);
          $table->string('rasio1',5);
          $table->string('rasio2',5);
          $table->string('rasio3',5);
          $table->string('rasio4',5);
          $table->string('rasio5',5);
          $table->string('rasio_reverse',5);
          $table->string('rasio_akhir',5);
          $table->string('suspensi_depan',55);
          $table->string('suspensi_belakang',55);
          $table->string('rem_depan',25);
          $table->string('rem_belakang',25);
          $table->string('sistem_rem',25);
          $table->string('sistem_penggerak',25);
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_spesifikasi');
    }
}

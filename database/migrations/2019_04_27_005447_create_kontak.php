<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_contact', function (Blueprint $table) {
      $table->increments('contact_id');
      $table->string('contact_name',50);
      $table->string('contact_type',50);
      $table->string('contact_desc',50);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_kontak');
    }
}

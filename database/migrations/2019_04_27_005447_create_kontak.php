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
      $table->increments('id_user');
      $table->string('phone',15);
      $table->string('fax',15);
      $table->string('email')->unique();
      $table->string('whatsapp_no',15);
      $table->string('fax',15);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

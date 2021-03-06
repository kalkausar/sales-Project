<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_testimoni', function (Blueprint $table) {
      $table->increments('id');
      $table->longText('testimoni_string');
      $table->string('testimoni_name',30);
      $table->string('testimoni_job',30);
      $table->string('testimoni_image');
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
        //
    }
}

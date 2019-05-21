<?php

use Illuminate\Database\Seeder;

class InputAboutContent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_about')->insert([
          'about_content' => 'this is about content, please change'
        ]);
    }
}

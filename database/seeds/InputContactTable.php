<?php

use Illuminate\Database\Seeder;

class InputContactTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_contact')->insert([
          'contact_name' => 'Whatsapp',
          'contact_desc' => '081234567890'
        ]);

        DB::table('tb_contact')->insert([
          'contact_name' => 'FAX',
          'contact_desc' => '081234567890'
        ]);

        DB::table('tb_contact')->insert([
          'contact_name' => 'Phone',
          'contact_desc' => '081234567890'
        ]);

        DB::table('tb_contact')->insert([
          'contact_name' => 'E-Mail',
          'contact_desc' => 'no-reply@gmail.com'
        ]);

        DB::table('tb_contact')->insert([
          'contact_name' => 'Address',
          'contact_desc' => 'Alamat Kantor'
        ]);
    }
}

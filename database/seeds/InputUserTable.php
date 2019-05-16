<?php

use Illuminate\Database\Seeder;

class InputUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'GUCC',
        'email' => 'gucc@gmail.com',
        'roles_id'=> 1,
        'password' => '$2y$10$TbdH.YaRm9rnssSjLlcrbeOGpsU5VeeBxWGBaIGKNaoqKAnoRUTUa',
      ]);
      DB::table('users')->insert([
          'name' => 'Kal Kausar',
          'email' => 'kalkausar98@gmail.com',
          'roles_id' => 1,
          'password' => '$2y$10$TbdH.YaRm9rnssSjLlcrbeOGpsU5VeeBxWGBaIGKNaoqKAnoRUTUa',
        ]);
    }
}

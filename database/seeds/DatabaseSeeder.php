<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(InputUserTable::class);
        $this->call(InputAboutContent::class);
        $this->call(InputContactTable::class);

        Model::reguard();
    }
}

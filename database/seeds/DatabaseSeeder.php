<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
        $location = factory(App\Location::class, 10)->create();
        $Amenety = factory(App\Amenety::class, 10)->create();

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Consequence;

class ConsequencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Consequence::class, 15)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Aspect;

class AspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aspect::class, 15)->create();
    }
}

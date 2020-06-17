<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 20; $i++){
            factory(\App\Item::class)->create();
        }
    }
}

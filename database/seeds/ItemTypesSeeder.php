<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class ItemTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = ["Pizza", "Hamburger", "Soda", "HotDog"];
        for($i=0; $i<=3; $i++){
            DB::table('itemType')->insert([
                'it_title' => $type[$i],
            ]);
        }
    }
}

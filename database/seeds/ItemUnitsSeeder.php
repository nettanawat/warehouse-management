<?php

use Illuminate\Database\Seeder;

class ItemUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kilogram = new \App\Src\entity\ItemUnit();
        $kilogram->unit_code = "KG";
        $kilogram->unit_description = "กิโลกรัม";
        $kilogram->save();

        $pack = new \App\Src\entity\ItemUnit();
        $pack->unit_code = "BA";//back
        $pack->unit_description = "ถุง";
        $pack->save();

        $bigPack = new \App\Src\entity\ItemUnit();
        $bigPack->unit_code = "SA";//sack
        $bigPack->unit_description = "กระสอบ";
        $bigPack->save();
    }
}

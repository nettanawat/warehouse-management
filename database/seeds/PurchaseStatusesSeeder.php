<?php

use Illuminate\Database\Seeder;

class PurchaseStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paid = new \App\Src\entity\PurchaseStatus();
        $paid->status_code = "S";
        $paid->status_description = "จ่ายแล้ว";
        $paid->save();

        $pending = new \App\Src\entity\PurchaseStatus();
        $pending->status_code = "P";
        $pending->status_description = "รอชำระเงิน";
        $pending->save();

        $pending = new \App\Src\entity\PurchaseStatus();
        $pending->status_code = "I";
        $pending->status_description = "ชำระเงินบางส่วน";
        $pending->save();
    }
}

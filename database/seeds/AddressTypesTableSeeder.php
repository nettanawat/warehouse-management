<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AddressTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paidAddress = new \App\Src\entity\AddressTypes();
        $paidAddress->type_code = "PA";
        $paidAddress->type_description = "ที่อยู่สำหรับเก็บเงิน";
        $paidAddress->save();

        $invoiceAddress = new \App\Src\entity\AddressTypes();
        $invoiceAddress->type_code = "IA";
        $invoiceAddress->type_description = "ที่อยู่สำหรับออกใบเสร็จ";
        $invoiceAddress->save();

        $officeAddress = new \App\Src\entity\AddressTypes();
        $officeAddress->type_code = "OA";
        $officeAddress->type_description = "ที่อยู่ออฟฟิศ";
        $officeAddress->save();

//
//        DB::table('address_types')->insert([
//            [
//                'type_code' => 'Test1',
//                'type_description' => 'Test description'
//            ],
//            [
//                'type_code' => 'Test2',
//                'type_description' => 'Test description'
//            ]
//        ]);
    }
}

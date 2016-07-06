<?php

use Illuminate\Database\Seeder;

class FinancialTransactionCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase = new App\Src\entity\FinancialTransactionType();
        $purchase->transaction_type_code = "P";
        $purchase->transaction_type_description = "ซื้อ";
        $purchase->save();

        $sale = new App\Src\entity\FinancialTransactionType();
        $sale->transaction_type_code = "S";
        $sale->transaction_type_description = "ขาย";
        $sale->save();
    }
}

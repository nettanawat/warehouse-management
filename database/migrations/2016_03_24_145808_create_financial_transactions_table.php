<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('transaction_date');
            $table->integer('transaction_amount');
            $table->string('transaction_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('financial_transactions');
    }
}

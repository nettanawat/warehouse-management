<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_quantity');
            $table->double('value_supplied');
            $table->double('standard_price');
            $table->integer('percentage_discount');
            $table->dateTime('delivery_date');
            $table->timestamps();

            $table->integer('suppliers_id')->unsigned();
            $table->foreign('suppliers_id')->references('id')->on('suppliers');

            $table->integer('inventory_items_id')->unsigned();
            $table->foreign('inventory_items_id')->references('id')->on('inventory_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_suppliers');
    }
}

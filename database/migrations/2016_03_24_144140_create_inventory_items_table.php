<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_description')->nullable();
            $table->integer('number_in_stock');
            $table->double('sale_price');
            $table->timestamps();

            $table->integer('brands_id')->unsigned();
            $table->foreign('brands_id')->references('id')->on('brands');

            $table->integer('inventory_item_types_id')->unsigned();
            $table->foreign('inventory_item_types_id')->references('id')->on('inventory_item_types');

            $table->integer('item_units_id')->unsigned();
            $table->foreign('item_units_id')->references('id')->on('item_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventory_items');
    }
}

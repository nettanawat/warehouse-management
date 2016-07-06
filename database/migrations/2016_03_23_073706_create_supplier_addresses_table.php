<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('zip_code')->nullable();
            $table->timestamps();
            
            $table->integer('suppliers_id')->unsigned();
            $table->foreign('suppliers_id')->references('id')->on('suppliers');

            $table->integer('address_types_id')->unsigned();
            $table->foreign('address_types_id')->references('id')->on('address_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supplier_addresses');
    }
}

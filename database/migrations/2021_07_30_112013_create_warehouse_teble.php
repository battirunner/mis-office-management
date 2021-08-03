<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseTeble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_teble', function (Blueprint $table) {
            $table->id();
            $table->int('user_id');
            $table->int('product_id');
            $table->double('quantity');
            $table->string('unit');
            $table->string('vendor');
            $table->int('entry_type');
            $table->mediumText('related_message');
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
        Schema::dropIfExists('warehouse_teble');
    }
}

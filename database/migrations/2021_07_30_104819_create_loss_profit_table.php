<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLossProfitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loss_profit', function (Blueprint $table) {
            $table->id();
            $table->text('details');
            $table->double('amount');
            $table->string('currency');
            $table->dateTime('report_month');
            $table->integer('loss_profit_stats');
            $table->integer('reported_by_salary');
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
        Schema::dropIfExists('loss_profit');
    }
}

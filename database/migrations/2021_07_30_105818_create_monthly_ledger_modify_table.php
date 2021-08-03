<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyLedgerModifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_ledger_modify', function (Blueprint $table) {
            $table->id();
            $table->int('accounts_id');
            $table->dateTime('entry_date');
            $table->int('particular');
            $table->double('gm');
            $table->double('quantity');
            $table->double('per_kg');
            $table->double('total_bill');
            $table->double('balance');
            $table->string('currency');
            $table->int('reported_by_salary');
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
        Schema::dropIfExists('monthly_ledger_modify');
    }
}

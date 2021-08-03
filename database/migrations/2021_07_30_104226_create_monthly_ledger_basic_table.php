<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyLedgerBasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_ledger_basic', function (Blueprint $table) {
            $table->id();
            $table->int('accounts_id');
            $table->dateTime('entry_date');
            $table->int('particular');
            $table->double('debit');
            $table->double('crebit');
            $table->double('balance');
            $table->string('currency');
            $table->int('reported_by_user_id');
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
        Schema::dropIfExists('monthly_ledger_basic');
    }
}

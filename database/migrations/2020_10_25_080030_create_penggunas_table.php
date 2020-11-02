<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('bank_name')->nullable();
			$table->string('acc_name')->nullable();
			$table->string('acc_no')->nullable();
			$table->string('coin')->nullable();
			$table->string('ref_name')->nullable();
			$table->string('status')->nullable();
			$table->integer('amount')->nullable();
			$table->integer('payout')->nullable();
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
        Schema::dropIfExists('penggunas');
    }
}

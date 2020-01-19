<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerJustSaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_just_says', function (Blueprint $table) {
            $table->bigIncrements('id');
		    $table->string('full_name');
			$table->string('email');
			$table->string('phone');
			$table->string('company_name')->nullable();
			$table->string('message');
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
        Schema::dropIfExists('customer_just_says');
    }
}

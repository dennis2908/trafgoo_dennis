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
			$table->string('fname')->nullable();
			$table->string('lname')->nullable();
			$table->string('address')->nullable();
			$table->string('bname')->nullable();
			$table->string('acname')->nullable();
			$table->string('acnum')->nullable();
			$table->string('coin')->nullable();
			$table->string('refname')->nullable();
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
